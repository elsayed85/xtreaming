<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use App\Filament\Resources\Movie\MovieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMovie extends EditRecord
{
    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
