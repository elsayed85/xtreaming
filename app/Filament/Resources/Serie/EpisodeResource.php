<?php

namespace App\Filament\Resources\Serie;

use App\Filament\Resources\Serie\EpisodeResource\Pages;
use App\Filament\Resources\Serie\EpisodeResource\RelationManagers;
use App\Filament\Resources\Serie\EpisodeResource\RelationManagers\DirectLinksRelationManager;
use App\Filament\Resources\Serie\EpisodeResource\RelationManagers\TracksRelationManager;
use App\Models\Serie\Episode;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EpisodeResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return config('global_translate.keys');
    }

    protected static ?string $model = Episode::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('season_id')
                    ->relationship('season', 'name')
                    ->required(),
                Forms\Components\Select::make('serie_id')
                    ->relationship('serie', 'title')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('overview')
                    ->maxLength(255),
                Forms\Components\TextInput::make('poster_path')
                    ->maxLength(255),
                Forms\Components\TextInput::make('air_date')
                    ->maxLength(255),
                Forms\Components\TextInput::make('number'),
                Forms\Components\Toggle::make('published')
                    ->required(),
                Forms\Components\Toggle::make('featured')
                    ->required(),
                Forms\Components\Toggle::make('slidered')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('season.name'),
                Tables\Columns\TextColumn::make('serie.title'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('overview'),
                Tables\Columns\TextColumn::make('poster_path'),
                Tables\Columns\TextColumn::make('air_date'),
                Tables\Columns\TextColumn::make('number'),
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
            DirectLinksRelationManager::class,
            TracksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEpisodes::route('/'),
            'create' => Pages\CreateEpisode::route('/create'),
            'view' => Pages\ViewEpisode::route('/{record}'),
            'edit' => Pages\EditEpisode::route('/{record}/edit'),
        ];
    }
}
