<?php

namespace App\Filament\Resources\KeywordResource\Pages;

use App\Filament\Resources\KeywordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKeyword extends ViewRecord
{
    protected static string $resource = KeywordResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
