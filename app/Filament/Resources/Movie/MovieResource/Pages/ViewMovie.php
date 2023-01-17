<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use App\Collectors\Scrapers\Direct\Flixhq;
use App\Collectors\Scrapers\Direct\Loklok;
use App\Collectors\Scrapers\Direct\Moviebox;
use App\Collectors\Scrapers\Direct\Svetacdn;
use App\Filament\Resources\Movie\MovieResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMovie extends ViewRecord
{
    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
            // Flixhq
            Actions\Action::make("Load Flixhq")->action("loadFlixhq"),
            // Loklok
            Actions\Action::make("Load Loklok")->action("loadLoklok"),
            // Moviebox
            Actions\Action::make("Load Moviebox")->action("loadMoviebox"),
            // Svetacdn
            Actions\Action::make("Load Svetacdn")->action("loadSvetacdn"),
        ];
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

        if (is_null($provider)) {
            Notification::make("No data found")->title("No data found")->warning()->send();
        }

        $playlist = $this->record->watchPlaylists()->firstOrCreate([
            'provider' => $provider['provider'],
        ], [
            'provider' => $provider['provider'],
        ]);

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

        Notification::make("Flixhq loaded")->title("Flixhq loaded")->success()->send();
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

        if (is_null($provider)) {
            Notification::make("No data found")->title("No data found")->warning()->send();
        }

        $playlist = $this->record->watchPlaylists()->firstOrCreate([
            'provider' => $provider['provider'],
        ], [
            'provider' => $provider['provider'],
        ]);

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

        Notification::make("Loklok loaded")->title("Loklok loaded")->success()->send();
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

        if (is_null($provider)) {
            Notification::make("No data found")->title("No data found")->warning()->send();
        }

        $playlist = $this->record->watchPlaylists()->firstOrCreate([
            'provider' => $provider['provider'],
        ], [
            'provider' => $provider['provider'],
        ]);

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

        Notification::make("Moviebox loaded")->title("Moviebox loaded")->success()->send();
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

        if (is_null($provider)) {
            Notification::make("No data found")->title("No data found")->warning()->send();
        }

        $playlist = $this->record->watchPlaylists()->firstOrCreate([
            'provider' => $provider['provider'],
        ], [
            'provider' => $provider['provider'],
        ]);

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

        Notification::make("Svetacdn loaded")->title("Svetacdn loaded")->success()->send();
    }
}
