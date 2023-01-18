<?php

namespace App\Filament\Resources\Serie\SerieResource\Pages;

use App\Filament\Resources\Serie\SerieResource;
use App\Models\Serie\Serie;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSerie extends CreateRecord
{
    protected static string $resource = SerieResource::class;

    public function mount(): void
    {
        $tmdb_id = request("tmdb_id");
        $serie = Serie::find($tmdb_id);
        if ($serie) {
            Notification::make()
                ->title(__('Serie already exist'))
                ->danger()
                ->persistent()
                ->actions([
                    Action::make(__('Go to Serie'))
                        ->url(route('filament.resources.serie/series.view', $serie->id))
                        ->button()
                        ->openUrlInNewTab(),
                    Action::make(__('Create new movie'))
                        ->url(route('filament.resources.serie/series.create'))
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
