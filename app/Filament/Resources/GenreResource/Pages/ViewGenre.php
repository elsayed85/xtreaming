<?php

namespace App\Filament\Resources\GenreResource\Pages;

use App\Filament\Resources\GenreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGenre extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = GenreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\ViewAction::make(),
        ];
    }
}
