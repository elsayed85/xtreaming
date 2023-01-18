<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentSafelyDelete\Pages\Concerns\HasRevertableRecord;

class ListEpisodes extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = EpisodeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
