<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CityResource\Pages;
use App\Filament\Resources\CityResource\RelationManagers;
use App\Models\Catalog\City;
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
use App\Models\Language;
use App\Models\Catalog\PriceType;

class CityResource extends Resource
{
    protected static ?string $model = City::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Catalog';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.cities');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.cities');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.cities.city');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $priceTypes = PriceType::all();
        $priceTypeOptions = [];
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label(__('admin.crud.create.name'))
                        ->required(),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label(__('admin.crud.create.slug'))
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        foreach ($priceTypes as $priceType) {
            $priceTypeOptions[$priceType->id] = $priceType->name;
        }
        
        return $form
            ->schema([
                Select::make('price_type_id')
                    ->label(__('admin.crud.create.cities.price_types'))
                    ->options($priceTypeOptions),
                Forms\Components\TextInput::make('guid')
                    ->label(__('admin.crud.create.guid')),
                // Forms\Components\TextInput::make('kaspi_index')
                //     ->maxLength(255),
                TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->default(1)
                    ->required()
                    ->integer(),
                Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->default(true),
                Toggle::make('has_delivery')
                    ->label(__('admin.crud.create.has_delivery'))
                    ->default(false),
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
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('guid')
                    ->label(__('admin.crud.create.guid')),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (City $city) => $city->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('translations', function (Builder $query) use ($search) {
                            $query->where('name', $search);
                        });
                    }),
                Tables\Columns\TextColumn::make('slug')
                    ->state(fn (City $city) => $city->translation()?->slug)
                    ->label(__('admin.crud.create.slug'))
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('translations', function (Builder $query) use ($search) {
                            $query->where('slug', $search);
                        });
                    }),
                Tables\Columns\IconColumn::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->boolean(),
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
            'index' => Pages\ListCities::route('/'),
            'create' => Pages\CreateCity::route('/create'),
            'edit' => Pages\EditCity::route('/{record}/edit'),
        ];
    }
}
