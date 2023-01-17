<?php

namespace App\Filament\Resources\Movie;

use App\Filament\Resources\Movie\MovieCollectionResource\Pages;
use App\Filament\Resources\Movie\MovieCollectionResource\RelationManagers;
use App\Filament\Resources\Movie\MovieCollectionResource\RelationManagers\MoviesRelationManager;
use App\Models\Movie\MovieCollection;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MovieCollectionResource extends Resource
{
    protected static ?string $model = MovieCollection::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('overview')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('poster_path')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('backdrop_path')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('overview'),
                Tables\Columns\TextColumn::make('poster_path'),
                Tables\Columns\TextColumn::make('backdrop_path'),
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
            MoviesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMovieCollections::route('/'),
            'create' => Pages\CreateMovieCollection::route('/create'),
            'view' => Pages\ViewMovieCollection::route('/{record}'),
            'edit' => Pages\EditMovieCollection::route('/{record}/edit'),
        ];
    }
}
