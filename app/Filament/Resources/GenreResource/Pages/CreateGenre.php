<?php

namespace App\Filament\Resources\GenreResource\Pages;

use App\Filament\Resources\GenreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGenre extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = GenreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
