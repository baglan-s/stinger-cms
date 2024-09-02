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
use Filament\Forms\Components\Textarea;
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

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.stores.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.stores.title');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.stores.store');
    }

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
                        ->label(__('admin.crud.create.name'))
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label(__('admin.crud.create.slug'))
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.address')
                        ->label(__('admin.crud.create.stores.address'))
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.phone')
                        ->label(__('admin.crud.create.stores.phone'))
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.email')
                        ->label(__('admin.crud.create.email'))
                        ->maxLength(255),
                    Textarea::make('translations.' . $language->code . '.description')
                        ->label('Description')
                        ->rows(8),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('city_id')
                    ->label(__('admin.crud.create.cities.city'))
                    ->searchable(true)
                    ->options($cityOptions),
                Forms\Components\TextInput::make('guid')
                    ->label(__('admin.crud.create.guid')),
                Forms\Components\TextInput::make('lon')
                    ->label(__('admin.crud.create.stores.lon')),
                Forms\Components\TextInput::make('lat')
                    ->label(__('admin.crud.create.stores.lat')),
                Forms\Components\TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->required()
                    ->numeric()
                    ->default(0),
                FileUpload::make('image')
                    ->label(__('admin.crud.create.main_images'))
                    ->directory('images/stores'),
                FileUpload::make('images')
                    ->label(__('admin.crud.create.additional_images'))
                    ->multiple()
                    ->directory('images/stores')
                    ->columnSpan(2),
                Forms\Components\Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->required(),
                Forms\Components\Toggle::make('is_public')
                    ->label(__('admin.crud.create.is_public'))
                    ->required(),
                Tabs::make('translations')
                    ->label(__('admin.crud.create.translations'))
                    ->tabs($tabs)
                    ->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (Store $store) => $store->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->state(fn (Store $store) => $store->city?->translation()?->name)
                    ->label(__('admin.crud.create.city'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('admin.crud.create.image'))
                    ->square(),
                Tables\Columns\IconColumn::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin.crud.create.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('admin.crud.create.updated_at'))
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
