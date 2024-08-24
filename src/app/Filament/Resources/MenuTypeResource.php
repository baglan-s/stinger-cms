<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuTypeResource\Pages;
use App\Filament\Resources\MenuTypeResource\RelationManagers;
use App\Models\MenuType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuTypeResource extends Resource
{
    protected static ?string $model = MenuType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.menu_types');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.menu_types');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.menu_type');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('code')
                    ->label(__('admin.crud.create.code'))
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->lable(__('admin.crud.create.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('code')
                    ->label(__('admin.crud.create.code'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuTypes::route('/'),
            'create' => Pages\CreateMenuType::route('/create'),
            'edit' => Pages\EditMenuType::route('/{record}/edit'),
        ];
    }
}
