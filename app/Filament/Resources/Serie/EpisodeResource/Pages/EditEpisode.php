<?php

namespace App\Filament\Resources\Serie\EpisodeResource\Pages;

use App\Filament\Resources\Serie\EpisodeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEpisode extends EditRecord
{
    protected static string $resource = EpisodeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
