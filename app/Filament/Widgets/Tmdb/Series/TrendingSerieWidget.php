<?php

namespace App\Filament\Widgets\Tmdb\Series;

use App\Models\TmdbApi\TrendingSerie;
use App\Tables\Columns\TmdbPosterColumn;
use Closure;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TrendingSerieWidget extends BaseWidget
{
    protected static ?int $sort = -2;
    protected int $defaultTableRecordsPerPageSelectOption = 3;

    protected function getTableQuery(): Builder
    {
        return TrendingSerie::query();
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
