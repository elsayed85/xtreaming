<?php

namespace App\Filament\Resources\Serie;

use App\Filament\Resources\Serie\SeasonResource\Pages;
use App\Filament\Resources\Serie\SeasonResource\RelationManagers;
use App\Filament\Resources\Serie\SeasonResource\RelationManagers\EpisodesRelationManager;
use App\Models\Serie\Season;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeasonResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return config('global_translate.keys');
    }

    protected static ?string $model = Season::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            EpisodesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeasons::route('/'),
            'create' => Pages\CreateSeason::route('/create'),
            'view' => Pages\ViewSeason::route('/{record}'),
            'edit' => Pages\EditSeason::route('/{record}/edit'),
        ];
    }
}
