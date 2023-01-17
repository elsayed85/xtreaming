<?php

namespace App\Filament\Resources\Movie\MovieCollectionResource\Pages;

use App\Filament\Resources\Movie\MovieCollectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMovieCollection extends CreateRecord
{
    protected static string $resource = MovieCollectionResource::class;
}
