<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEpisode extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = EpisodeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
        ];
    }
}
