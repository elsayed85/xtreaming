<?php

namespace App\Filament\Resources\Serie\SerieResource\Pages;

use App\Filament\Resources\Serie\SerieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSerie extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = SerieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
