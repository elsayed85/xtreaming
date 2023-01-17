<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentSafelyDelete\Pages\Concerns\HasRevertableRecord;

class ListEpisodes extends ListRecords
{


    protected static string $resource = EpisodeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
