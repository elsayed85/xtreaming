<?php

namespace App\Filament\Resources\Movie\MovieCollectionResource\Pages;

use App\Filament\Resources\Movie\MovieCollectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMovieCollection extends EditRecord
{
    protected static string $resource = MovieCollectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
