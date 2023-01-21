<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Collectors\Scrapers\Direct\Dbgo;
use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Rezka;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
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
            // dbgo
            Actions\Action::make("Load Dbgo")->action("loadDbgo"),
            // rezka
            Actions\Action::make("Load Rezka")->action("loadRezka"),
            // Flixhq
            Actions\Action::make("Load Flixhq")->action("loadFlixhq"),
            // Loklok
            Actions\Action::make("Load Loklok")->action("loadLoklok"),
            // Moviebox
            Actions\Action::make("Load Moviebox")->action("loadMoviebox"),
        ];
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
