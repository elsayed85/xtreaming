<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use App\Filament\Resources\Movie\MovieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMovie extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
