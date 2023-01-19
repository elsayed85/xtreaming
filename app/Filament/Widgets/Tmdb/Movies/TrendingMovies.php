<?php

namespace App\Filament\Widgets\Tmdb\Movies;

use App\Models\TmdbApi\Movie;
use App\Models\TmdbApi\TrendingMovie;
use App\Tables\Columns\TmdbPosterColumn;
use Closure;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TrendingMovies extends BaseWidget
{
    protected static ?int $sort = -2;
    protected int $defaultTableRecordsPerPageSelectOption = 3;

    protected function getTableQuery(): Builder
    {
        return TrendingMovie::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TmdbPosterColumn::make('poster_path')
                ->label('Poster')
                ->height(100)
                ->square(),
            TextColumn::make('title')->searchable()->sortable(),
            TextColumn::make('vote_count')->searchable()->sortable(),
        ];
    }

    protected function getTableActions(): array
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
        return fn (Model $el): string => route("filament.resources.movie/movies.create", ['tmdb_id' => $el->id]);
    }
}
