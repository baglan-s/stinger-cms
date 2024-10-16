<?php

namespace App\Filament\Resources\SettingResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SearchHintsRelationManager extends RelationManager
{
    protected static string $relationship = 'searchHints';

    public static function getPluralModelLabel(): string
    {
        return __('admin.crud.create.settings.search_hints.title');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.settings.search_hints.search_hint');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TagsInput::make('search_word')
                    ->label(__('admin.crud.create.settings.search_hints.search_word'))
                    ->separator(',')
                    ->required(),
                Forms\Components\TextInput::make('search_hint')
                    ->label(__('admin.crud.create.settings.search_hints.search_hint'))
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('search_word')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('search_hint')
                    ->label(__('admin.crud.create.settings.search_hints.search_hint')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin.crud.create.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('admin.crud.create.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
