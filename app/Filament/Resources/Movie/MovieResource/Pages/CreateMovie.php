<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use Actions\Button;
use App\Filament\Resources\Movie\MovieResource;
use App\Models\Movie\Movie;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMovie extends CreateRecord
{
    // use CreateRecord\Concerns\Translatable;

    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\LocaleSwitcher::make()
        ];
    }

    public function mount(): void
    {
        $tmdb_id = request("tmdb_id");
        $movie_exist = Movie::find($tmdb_id);
        if ($movie_exist) {
            Notification::make()
                ->title(__('Movie already exist'))
                ->danger()
                ->persistent()
                ->actions([
                    Action::make(__('Go to movie'))
                        ->url(route('filament.resources.movie/movies.view', $movie_exist->id))
                        ->button()
                        ->openUrlInNewTab(),
                    Action::make(__('Create new movie'))
                        ->url(route('filament.resources.movie/movies.create'))
                        ->button()
                        ->openUrlInNewTab()
                ])
                ->send();
        }
        $this->authorizeAccess();

        $this->fillForm();

        $this->previousUrl = url()->previous();
    }
}
