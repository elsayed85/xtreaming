<?php

namespace App\Filament\Resources\Serie\SerieResource\Pages;

use App\Filament\Resources\Serie\SerieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSerie extends ViewRecord
{
    protected static string $resource = SerieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
