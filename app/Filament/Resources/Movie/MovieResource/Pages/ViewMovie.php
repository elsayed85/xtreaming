<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use App\Filament\Resources\Movie\MovieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMovie extends ViewRecord
{
    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
