<?php

namespace App\Filament\Resources\Serie\SeasonResource\Pages;

use App\Filament\Resources\Serie\SeasonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentSafelyDelete\Pages\Concerns\HasRevertableRecord;

class ListSeasons extends ListRecords
{

    protected static string $resource = SeasonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
