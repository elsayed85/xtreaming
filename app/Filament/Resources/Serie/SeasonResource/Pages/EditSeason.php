<?php

namespace App\Filament\Resources\Serie\SeasonResource\Pages;

use App\Filament\Resources\Serie\SeasonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeason extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = SeasonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
