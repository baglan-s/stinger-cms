<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('application_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('application_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                FileUpload::make('main_logo')
                    ->label('Main logo')
                    ->required()
                    ->directory('settings/images'),
                FileUpload::make('footer_logo')
                    ->label('Footer logo')
                    ->required()
                    ->directory('settings/images'),
                FileUpload::make('favicon')
                    ->label('Favicon')
                    ->required()
                    ->directory('settings/images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('application_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('application_email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('main_logo')
                    ->label('Main logo')
                    ->square(),
                Tables\Columns\ImageColumn::make('footer_logo')
                    ->label('Footer logo')
                    ->square(),
                Tables\Columns\ImageColumn::make('favicon')
                    ->label('Favicon')
                    ->square(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
