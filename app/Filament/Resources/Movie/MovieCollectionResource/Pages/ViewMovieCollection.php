<?php

namespace App\Filament\Resources\Movie\MovieCollectionResource\Pages;

use App\Filament\Resources\Movie\MovieCollectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMovieCollection extends ViewRecord
{
    protected static string $resource = MovieCollectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
