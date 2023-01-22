<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Collectors\Helpers\OpensubtitlesService;
use App\Collectors\Scrapers\Direct\Akwam;
use App\Collectors\Scrapers\Direct\Dbgo;
use App\Collectors\Scrapers\Direct\Faselhd;
use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Rezka;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ViewEpisode extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = EpisodeResource::class;

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
            // Akwam
            Actions\Action::make("Akwam")->action("loadAkwam"),
            // Flixhq
            Actions\Action::make("Flixhq")->action("loadFlixhq"),
            // Loklok
            Actions\Action::make("Loklok")->action("loadLoklok"),
            // Moviebox
            Actions\Action::make("Moviebox")->action("loadMoviebox"),
        ];
    }

    public function loadSubtitles()
    {
        $episode = $this->record;
        $serie = $episode->serie;
        $title = $episode->serie->getTranslations('title', ['en'])['en'];
        $subtitles = OpensubtitlesService::setData(
            $serie->id,
            $title,
            "episode",
            "ara",
            str_replace('tt', '', $serie->imdb_id),
            $episode->season_number,
            $episode->number
        )->getResult();

        if ($subtitles->count()) {
            $episode->subtitles()->delete();
            $subs = $subtitles->map(function ($path) {
                return [
                    'path' => $path,
                ];
            });
            $episode->subtitles()->createMany($subs->toArray());
            Notification::make("Subs Loaded")->title($subtitles->count() . " Subtitles Loaded")->success()->send();
            return;
        }
        Notification::make("No Subtitles found")->title("No Subtitles found")->warning()->send();
    }

    public function refreshInfo()
    {
        $episode = $this->record;
        $serie_id = $episode->serie_id;
        $season_number = $episode->season_number;
        $number = $episode->number;
        $data = Http::tmdb("/tv/$serie_id/season/$season_number/episode/$number", [
            'append_to_response' => 'translations',
        ]);

        $translations = collect($data['translations']['translations']);
        $ar = $translations->where('iso_639_1', 'ar')->first();
        $en = $translations->where('iso_639_1', 'en')->first();

        $name = $episode->getTranslations('name', ['en', 'ar']);
        if (!isset($name['en'])) $name['en'] = '';
        if (!isset($name['ar'])) $name['ar'] = '';

        $names = collect();
        if ($name['en'] != $en['data']['name'] && !empty($en['data']['name'])) {
            $names->put('en', $en['data']['name']);
        }

        if ($name['ar'] != $ar['data']['name'] && !empty($ar['data']['name'])) {
            $names->put('ar', $ar['data']['name']);
        }

        $overview = $episode->getTranslations('overview', ['en', 'ar']);
        if (!isset($overview['en'])) $overview['en'] = '';
        if (!isset($overview['ar'])) $overview['ar'] = '';

        $overviews = collect();
        if ($overview['en'] != $en['data']['overview'] && !empty($en['data']['overview'])) {
            $overviews->put('en', $en['data']['overview']);
        }

        if ($overview['ar'] != $ar['data']['overview'] && !empty($ar['data']['overview'])) {
            $overviews->put('ar', $ar['data']['overview']);
        }

        $new_data = [];
        if ($episode->air_date->format("Y-m-d") !=  $data["air_date"] && !empty($data["air_date"])) {
            $new_data["release_date"] = $data["air_date"];
        }

        // poster_path
        if ($episode->poster_path !=  str_replace("/", "", $data["still_path"]) && !empty($data["still_path"])) {
            $new_data["poster_path"] = $data["still_path"];
        }

        if ($names->isEmpty() && $overviews->isEmpty() && empty($new_data)) {
            Notification::make("No new info found")
                ->title("No new info found")
                ->warning()
                ->send();
            return;
        }

        if (!empty($new_data))
            $episode->fill($new_data);

        if (!$names->isEmpty())
            $episode->setTranslations('name', $names->toArray());

        if (!$overviews->isEmpty())
            $episode->setTranslations('overview', $overviews->toArray());
        $episode->save();

        Notification::make("Episode info refreshed successfully")
            ->title("Episode info refreshed successfully")
            ->success()
            ->send();
    }

    public function loadFaselhd()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Faselhd::search($data);
        $this->loadData($provider, Faselhd::PROVIDER);
    }

    public function loadAkwam()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Akwam::search($data);
        $this->loadData($provider, Akwam::PROVIDER);
    }

    public function loadLoklok()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Loklok::search($data);
        $this->loadData($provider, Loklok::PROVIDER);
    }

    public function loadFlixhq()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Flixhq::search($data);
        $this->loadData($provider, Flixhq::PROVIDER);
    }

    public function loadMoviebox()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Moviebox::search($data);

        $this->loadData($provider, Moviebox::PROVIDER);
    }

    public function loadDbgo()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Dbgo::search($data);
        $this->loadData($provider, Dbgo::PROVIDER);
    }

    public function loadRezka()
    {
        $data = [
            'type' => "tv",
            'text' => strtolower($this->record->season->serie->getTranslations('title', ['en'])['en']),
            'year' => getYear($this->record->season->serie->release_date),
            'season' => $this->record->season_number,
            'episode' => $this->record->number,
            'imdb_id' => $this->record->season->serie->imdb_id
        ];

        $provider = Rezka::search($data);
        $this->loadData($provider, Rezka::PROVIDER);
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
}
