<?php

namespace App\Filament\Resources\Serie\SerieResource\Pages;

use App\Filament\Resources\Serie\SerieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentSafelyDelete\Pages\Concerns\HasRevertableRecord;

class ListSeries extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = SerieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
