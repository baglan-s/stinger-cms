<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StoreResource\Pages;
use App\Filament\Resources\StoreResource\RelationManagers;
use App\Models\Catalog\Store;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use App\Models\Language;
use App\Models\Catalog\City;

class StoreResource extends Resource
{
    protected static ?string $model = Store::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = 'Catalog';

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $cities = City::all();
        $cityOptions = [];
        $tabs = [];

        foreach ($cities as $city) {
            $cityOptions[$city->id] = $city->translation()?->name;
        }

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label('Slug')
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.address')
                        ->label('Address')
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.phone')
                        ->label('Phone')
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.email')
                        ->label('Email')
                        ->maxLength(255),
                    TextArea::make('translations.' . $language->code . '.description')
                        ->label('Description')
                        ->rows(8),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('city_id')
                    ->label('City')
                    ->searchable(true)
                    ->options($cityOptions),
                Forms\Components\TextInput::make('guid'),
                Forms\Components\TextInput::make('lon')
                    ->label('Longitude'),
                Forms\Components\TextInput::make('lat')
                    ->label('Lattitude'),
                Forms\Components\TextInput::make('sort')
                    ->required()
                    ->numeric()
                    ->default(0),
                FileUpload::make('image')
                    ->label('Main Image')
                    ->directory('images/stores'),
                FileUpload::make('images')
                    ->label('Additional Images')
                    ->multiple()
                    ->directory('images/stores')
                    ->columnSpan(2),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\Toggle::make('is_public')
                    ->required(),
                Tabs::make('translations')
                    ->label('Translations')
                    ->tabs($tabs)
                    ->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (Store $store) => $store->translation()?->name)
                    ->label('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->state(fn (Store $store) => $store->city?->translation()?->name)
                    ->label('City')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->square(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListStores::route('/'),
            'create' => Pages\CreateStore::route('/create'),
            'edit' => Pages\EditStore::route('/{record}/edit'),
        ];
    }
}
