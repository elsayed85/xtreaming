<?php

namespace App\Filament\Resources\Serie;

use App\Filament\Resources\Serie\SerieResource\Pages;
use App\Filament\Resources\Serie\SerieResource\RelationManagers;
use App\Filament\Resources\Serie\SerieResource\RelationManagers\CastRelationManager;
use App\Filament\Resources\Serie\SerieResource\RelationManagers\EpisodesRelationManager;
use App\Filament\Resources\Serie\SerieResource\RelationManagers\GenresRelationManager;
use App\Filament\Resources\Serie\SerieResource\RelationManagers\KeywordsRelationManager;
use App\Filament\Resources\Serie\SerieResource\RelationManagers\SeasonsRelationManager;
use App\Models\Country;
use App\Models\Serie\Serie;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Http;

class SerieResource extends Resource
{
    protected static ?string $model = Serie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $tmdb_id = request("tmdb_id");
        $default = [];
        if ($tmdb_id) {
            $data = Http::tmdb("/tv/$tmdb_id", [
                "append_to_response" => "external_ids,translations",
            ]);

            $titles = collect($data['translations']['translations']);
            $en =  $titles->where('iso_639_1', 'en')->first();
            $id = $titles->where('iso_639_1', 'id')->first();
            $en_title = null;
            if ($en) {
                $en_title = $en['data']['name'];
                if ($en_title == "" || is_null($en_title)) {
                    $en_title = $id['data']['name'] ?? null;
                }
            }
            $default = [
                "title" => $data['name'],
                "original_title" => $data["original_name"],
                'title_en' => $en_title,
                "overview" => $data["overview"],
                "imdb_rating" => $data["vote_average"],
                "imdb_id" => $data["external_ids"]["imdb_id"],
                "release_date" => $data["first_air_date"],
                "poster_path" => str_replace("/", "", $data["poster_path"]),
                "backdrop_path" => str_replace("/", "", $data["backdrop_path"]),
            ];

            $production_countries = collect($data["production_countries"])->pluck("iso_3166_1");
            if ($production_countries->count() > 0)
                $default["country"] = $production_countries->first();
            else
                $default["country"] = "0";
        }

        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->default($tmdb_id),
                Forms\Components\TextInput::make('title')
                    ->default($default["title"] ?? "")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('original_title')
                    ->default($default["original_title"] ?? "")
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_en')
                    ->default($default["title_en"] ?? "")
                    ->maxLength(255),
                Forms\Components\Textarea::make('overview')
                    ->default($default["overview"] ?? "")
                    ->required(),
                Select::make("country_id")
                    ->relationship('country', 'name')
                    ->default(Country::whereCode($default["country"] ?? "0")->first()->id ?? null)
                    ->required(),
                Forms\Components\TextInput::make('imdb_rating')
                    ->default($default["imdb_rating"] ?? ""),
                Forms\Components\TextInput::make('imdb_id')
                    ->default($default["imdb_id"] ?? "")
                    ->maxLength(255),
                Forms\Components\DatePicker::make('release_date')
                    ->default($default["release_date"] ?? ""),
                Forms\Components\TextInput::make('poster_path')
                    ->default($default["poster_path"] ?? "")
                    ->maxLength(255),
                Forms\Components\TextInput::make('backdrop_path')
                    ->default($default["backdrop_path"] ?? "")
                    ->maxLength(255),
                Forms\Components\Toggle::make('published')
                    ->required(),
                Forms\Components\Toggle::make('featured')
                    ->required(),
                Forms\Components\Toggle::make('slidered')
                    ->required(),
                Forms\Components\Toggle::make('comment_closed')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('overview'),
                Tables\Columns\TextColumn::make('country.name'),
                Tables\Columns\TextColumn::make('imdb_rating'),
                Tables\Columns\TextColumn::make('imdb_id'),
                Tables\Columns\TextColumn::make('release_date')
                    ->date(),
                Tables\Columns\TextColumn::make('poster_path'),
                Tables\Columns\TextColumn::make('backdrop_path'),
                Tables\Columns\IconColumn::make('published')
                    ->boolean(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('slidered')
                    ->boolean(),
                Tables\Columns\IconColumn::make('comment_closed')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            GenresRelationManager::class,
            CastRelationManager::class,
            KeywordsRelationManager::class,
            SeasonsRelationManager::class,
            EpisodesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeries::route('/'),
            'create' => Pages\CreateSerie::route('/create'),
            'view' => Pages\ViewSerie::route('/{record}'),
            'edit' => Pages\EditSerie::route('/{record}/edit'),
        ];
    }
}
