<?php

namespace App\Filament\Resources\Serie\SeasonResource\Pages;

use App\Filament\Resources\Serie\SeasonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSeason extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = SeasonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
