<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use App\Collectors\Helpers\OpensubtitlesService;
use App\Collectors\Scrapers\Direct\Akwam;
use App\Collectors\Scrapers\Direct\Dbgo;
use App\Collectors\Scrapers\Direct\FaselApi;
use App\Collectors\Scrapers\Direct\Faselhd;
use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Rezka;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Filament\Resources\Movie\MovieResource;
use App\Models\Movie\MovieCollection;
use App\Models\Person;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ViewMovie extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
            Actions\Action::make("Refresh")->action("refreshInfo"),
            Actions\Action::make("Subtitles")->action("loadSubtitles"),
            // dbgo
            Actions\Action::make("Dbgo")->action("loadDbgo"),
            // rezka
            Actions\Action::make("Rezka")->action("loadRezka"),
            // faselhd
            Actions\Action::make("FaselHd")->action("loadFaselhd"),
            // akwam
            Actions\Action::make("Akwam")->action("loadAkwam"),
            // Flixhq
            Actions\Action::make("Flixhq")->action("loadFlixhq"),
            // Loklok
            Actions\Action::make("Loklok")->action("loadLoklok"),
            // Svetacdn
            Actions\Action::make("Svetacdn")->action("loadSvetacdn"),
            // Moviebox
            Actions\Action::make("Moviebox")->action("loadMoviebox"),
        ];
    }

    public function loadSubtitles()
    {
        $movie = $this->record;
        $title = $movie->getTranslations('title', ['en'])['en'];
        $subtitles = OpensubtitlesService::setData(
            $movie->id,
            $title,
            "movie",
            "ara",
            str_replace('tt', '', $movie->imdb_id)
        )->getResult();

        if ($subtitles->count()) {
            $movie->subtitles()->delete();
            $subs = $subtitles->map(function ($path) {
                return [
                    'path' => $path,
                ];
            });
            $movie->subtitles()->createMany($subs->toArray());
            Notification::make("Subs Loaded")->title($subtitles->count() . " Subtitles Loaded")->success()->send();
            return;
        }
        Notification::make("No Subtitles found")->title("No Subtitles found")->warning()->send();
    }

    public function refreshInfo()
    {
        $movie = $this->record;
        $movie->load(["movieCollections", 'cast']);

        $tmdb_id = $movie->id;
        $data = Http::tmdb("/movie/$tmdb_id", [
            "append_to_response" => "external_ids,credits",
        ]);

        $new_data = [];

        if ($movie->imdb_rating !=  round($data["vote_average"], 2) && !empty($data["vote_average"])) {
            $new_data["imdb_rating"] = $data["vote_average"];
        }

        if ($movie->release_date->format("Y-m-d") !=  $data["release_date"] && !empty($data["release_date"])) {
            $new_data["release_date"] = $data["release_date"];
        }

        // poster_path
        if ($movie->poster_path !=  str_replace("/", "", $data["poster_path"]) && !empty($data["poster_path"])) {
            $new_data["poster_path"] = $data["poster_path"];
        }

        if ($movie->backdrop_path !=  str_replace("/", "", $data["backdrop_path"]) && !empty($data["backdrop_path"])) {
            $new_data["backdrop_path"] = $data["backdrop_path"];
        }

        //duration
        if ($movie->duration !=  $data["runtime"] && !empty($data["runtime"])) {
            $new_data["duration"] = $data["runtime"];
        }

        // imdb_id
        if ($movie->imdb_id !=  $data["imdb_id"] && !empty($data["imdb_id"])) {
            $new_data["imdb_id"] = $data["imdb_id"];
        }


        $message = "";
        if (count($new_data)) {
            $movie->update($new_data);
            $message = implode(", ", array_keys($new_data));
        }

        $cast = $data['credits']['cast'];

        if (count($cast)) {
            $existing_cast = $movie->cast->pluck('id')->toArray();
            $cast = collect($cast)
                ->where("known_for_department", "Acting")
                ->whereNotIn('id', $existing_cast)
                ->map(function ($cast) {
                    return Person::firstOrCreate(['id' => $cast['id']], [
                        'id' => $cast['id'],
                        'name' => $cast['name'],
                        'poster_path' => $cast['profile_path'],
                        'is_male' => $cast['gender'] == "2" ? true : false,
                        'popularity' => $cast['popularity'],
                    ])->id;
                });
            if ($cast->count()) {
                $movie->cast()->syncWithoutDetaching($cast);
                $message .= " Cast Refreshed,";
            }
        }


        if ($movie->movieCollections->count() == 0) {
            $collection = $data['belongs_to_collection'];
            if ($collection) {
                $collection_db = MovieCollection::firstOrCreate([
                    'id' => $collection['id'],
                ], [
                    'id' => $collection['id'],
                    'name' => $collection['name'],
                    'poster_path' => $collection['poster_path'],
                ])->id;
                $movie->movieCollections()->sync($collection_db);
                $message .= " Collection Refreshed,";
            }
        }

        if (!empty($message))
            Notification::make("Refreshed")->title($message)->success()->send();
        else
            Notification::make("Refreshed")->title("Nothing to refresh")->warning()->send();
    }

    public function loadFaselhd()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = FaselApi::search($data);
        $this->loadData($provider, FaselApi::PROVIDER);
    }

    public function loadAkwam()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Akwam::search($data);
        $this->loadData($provider, Akwam::PROVIDER);
    }

    public function loadFlixhq()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Flixhq::search($data);
        $this->loadData($provider, Flixhq::PROVIDER);
    }

    public function loadLoklok()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Loklok::search($data);
        $this->loadData($provider, Loklok::PROVIDER);
    }

    public function loadMoviebox()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Moviebox::search($data);
        $this->loadData($provider, Moviebox::PROVIDER);
    }

    public function loadSvetacdn()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Svetacdn::search($data);
        $this->loadData($provider, Svetacdn::PROVIDER);
    }

    public function loadDbgo()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Dbgo::search($data);
        $this->loadData($provider, Dbgo::PROVIDER);
    }

    public function loadData($provider, $provider_name)
    {
        if (is_null($provider)) {
            Notification::make("No data found")->title("No data found")->warning()->send();
            return;
        }

        $playlist = $this->record->watchPlaylists()->firstOrCreate([
            'provider' => $provider['provider'],
        ], [
            'provider' => $provider['provider'],
        ]);

        $playlist->update(['is_active' => true]);

        // delete old local files from storage
        $query = "s1id4s7b%" . $provider_name . "%";
        $playlist->links()->where('url', 'like', $query)->get()->map(function ($link) {
            $path = $link->getAttributes()['url'];
            if (Storage::disk('local')->exists($path)) {
                Storage::disk('local')->delete($path);
            }
        });


        $playlist->links()->delete();
        $playlist->tracks()->delete();

        $urls = collect($provider['urls'])->map(function ($el) use ($playlist) {
            return [
                'url' => $el['url'],
                'label' =>  $el['label'],
                'ext' => $el['ext'],
            ];
        });
        if ($urls->count() > 0)
            $playlist->links()->createMany($urls->toArray());

        $tracks = collect($provider['tracks'])->map(function ($el) use ($playlist) {
            return [
                'url' => $el['url'],
                'label' =>  $el['lang'],
            ];
        });
        if ($tracks->count() > 0)
            $playlist->tracks()->createMany($tracks->toArray());

        Notification::make("$provider_name loaded")->title("$provider_name loaded")->success()->send();
    }

    public function loadRezka()
    {
        $data = [
            'type' => "movie",
            'text' => strtolower($this->record->original_title),
            'year' => getYear($this->record->release_date),
            'season' => null,
            'episode' => null,
            'imdb_id' => $this->record->imdb_id
        ];

        $provider = Rezka::search($data);
        $this->loadData($provider, Rezka::PROVIDER);
    }
}
