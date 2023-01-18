<?php

namespace App\Filament\Resources\Movie;

use App\Filament\Resources\Movie\MovieResource\Pages;
use App\Filament\Resources\Movie\MovieResource\RelationManagers;
use App\Filament\Resources\Movie\MovieResource\RelationManagers\CastRelationManager;
use App\Filament\Resources\Movie\MovieResource\RelationManagers\DirectLinksRelationManager;
use App\Filament\Resources\Movie\MovieResource\RelationManagers\GenresRelationManager;
use App\Filament\Resources\Movie\MovieResource\RelationManagers\KeywordsRelationManager;
use App\Filament\Resources\Movie\MovieResource\RelationManagers\MovieCollectionsRelationManager;
use App\Filament\Resources\Movie\MovieResource\RelationManagers\TracksRelationManager;
use App\Models\Country;
use App\Models\Movie\Movie;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Http;

class MovieResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return config('global_translate.keys');
    }

    protected static ?string $model = Movie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $tmdb_id = request("tmdb_id");
        $default = [];
        if ($tmdb_id) {
            $data = Http::tmdb("/movie/$tmdb_id", [
                "append_to_response" => "external_ids",
            ]);

            $default = [
                "title" => $data["title"],
                "original_title" => $data["original_title"],
                "overview" => $data["overview"],
                "imdb_rating" => $data["vote_average"],
                "imdb_id" => $data["imdb_id"],
                "duration" => $data["runtime"],
                "release_date" => $data["release_date"],
                "poster_path" => str_replace("/", "", $data["poster_path"]),
                "backdrop_path" => str_replace("/", "", $data["backdrop_path"]),
            ];

            $production_countries = collect($data["production_countries"])->pluck("iso_3166_1");
            if ($production_countries->count() > 0)
                $default["country"] = $production_countries->first();
            else
                $default["country"] = "0";

            $videos = Http::tmdb("/movie/$tmdb_id/videos", [
                'language' => 'en'
            ]);
            $trailer = collect($videos["results"])->firstWhere("type", "Trailer");
            if ($trailer)
                $default["trailer_url"] = "https://www.youtube.com/watch?v=" . $trailer["key"];
            else
                $default["trailer_url"] = "";
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
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('overview')
                    ->default($default["overview"] ?? ""),
                Select::make("country_id")
                    ->relationship('country', 'name')
                    ->default(Country::whereCode($default["country"] ?? "0")->first()->id ?? null)
                    ->required(),
                Forms\Components\TextInput::make('imdb_rating')
                    ->default($default["imdb_rating"] ?? ""),
                Forms\Components\TextInput::make('imdb_id')
                    ->default($default["imdb_id"] ?? "")
                    ->maxLength(255),
                Forms\Components\TextInput::make('duration')
                    ->default($default["duration"] ?? ""),
                Forms\Components\DatePicker::make('release_date')
                    ->default($default["release_date"] ?? ""),
                Forms\Components\TextInput::make('trailer_url')
                    ->default($default["trailer_url"] ?? "")
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('release_date')
                    ->date(),
                Tables\Columns\TextColumn::make('trailer_url'),
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
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            MovieCollectionsRelationManager::class,
            CastRelationManager::class,
            KeywordsRelationManager::class,
            DirectLinksRelationManager::class,
            TracksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMovies::route('/'),
            'create' => Pages\CreateMovie::route('/create'),
            'view' => Pages\ViewMovie::route('/{record}'),
            'edit' => Pages\EditMovie::route('/{record}/edit'),
        ];
    }
}
