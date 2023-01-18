<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEpisode extends CreateRecord
{
    // use CreateRecord\Concerns\Translatable;
    protected static string $resource = EpisodeResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\LocaleSwitcher::make(),
        ];
    }
}
