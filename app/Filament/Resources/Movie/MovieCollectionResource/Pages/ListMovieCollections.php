<?php

namespace App\Filament\Resources\Movie\MovieCollectionResource\Pages;

use App\Filament\Resources\Movie\MovieCollectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMovieCollections extends ListRecords
{
    protected static string $resource = MovieCollectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
