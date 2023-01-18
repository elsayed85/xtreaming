<?php

namespace App\Filament\Resources\Movie\MovieResource\Pages;

use App\Filament\Resources\Movie\MovieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentSafelyDelete\Pages\Concerns\HasRevertableRecord;

class ListMovies extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = MovieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
