<?php

namespace App\Filament\Widgets\Tmdb\Movies;

use App\Models\TmdbApi\Movie;
use App\Models\TmdbApi\OnTheAirSerie;
use App\Models\TmdbApi\PopularMovie;
use App\Models\TmdbApi\PopularSerie;
use App\Tables\Columns\TmdbPosterColumn;
use Closure;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PopularSeriesWidget extends BaseWidget
{
    protected static ?int $sort = -2;
    protected int $defaultTableRecordsPerPageSelectOption = 3;

    protected function getTableQuery(): Builder
    {
        return PopularSerie::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TmdbPosterColumn::make('poster_path')
                ->label('Poster')
                ->height(100)
                ->square(),
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('vote_average')->searchable()->sortable(),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            //
        ];
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [3, 10, 20];
    }

    protected function getTableRecordUrlUsing(): Closure
    {
        return fn (Model $el): string => route("filament.resources.serie/series.create", ['tmdb_id' => $el->id]);
    }
}
