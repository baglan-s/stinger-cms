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
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use App\Models\Catalog\Product;
use App\Models\Language;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.system.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.system.settings');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.system.settings');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.settings.setting');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $languageOptions = [];

        foreach ($languages as $language) {
            $languageOptions[$language->id] = $language->name;
        }

        return $form
            ->schema([
                Tabs::make('Settings')
                    ->schema([
                        Tabs\Tab::make('Main')
                            ->schema([
                                Forms\Components\TextInput::make('application_name')
                                    ->label(__('admin.crud.create.settings.application_name'))
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('application_email')
                                    ->label(__('admin.crud.create.settings.application_email'))
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                FileUpload::make('main_logo')
                                    ->label(__('admin.crud.create.settings.main_logo'))
                                    ->directory('images/settings'),
                                FileUpload::make('footer_logo')
                                    ->label(__('admin.crud.create.settings.footer_logo'))
                                    ->directory('images/settings'),
                                FileUpload::make('favicon')
                                    ->label(__('admin.crud.create.settings.favicon'))
                                    ->directory('images/settings'),
                                Select::make('language_id')
                                    ->label(__('admin.crud.create.language_id'))
                                    ->options($languageOptions)
                                    ->searchable(),
                            ]),
                        Tabs\Tab::make('Marketing')
                            ->schema([
                                Fieldset::make('weekly product')
                                    ->label(__('admin.crud.create.settings.weekly_product_id'))
                                    ->schema([
                                        Select::make('weekly_product_id')
                                            ->label(__('admin.crud.create.settings.weekly_product_id'))
                                            ->searchable()
                                            ->getSearchResultsUsing(function (string $search): array {
                                                $products = Product::whereHas('translations', function ($query) use ($search) {
                                                        $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                                                    })
                                                    ->with(['translations' => function ($query) {
                                                        $query->whereHas('language', function ($q) {
                                                            $q->where('code', app()->getLocale());
                                                        });
                                                    }])
                                                    ->limit(50)
                                                    ->get();

                                                return $products->mapWithKeys(function ($product) {
                                                    return [$product->id => $product->translation()?->name];
                                                })->toArray();
                                            })
                                            ->getOptionLabelUsing(fn ($value): ?string => Product::find($value)?->translation()?->name),
                                        DateTimePicker::make('weekly_product_starts_at')
                                            ->label(__('admin.crud.create.settings.weekly_product_starts_at'))
                                            ->native(false)
                                            ->hoursStep(1)
                                            ->minutesStep(30),
                                        DateTimePicker::make('weekly_product_ends_at')
                                            ->label(__('admin.crud.create.settings.weekly_product_ends_at'))
                                            ->native(false)
                                            ->hoursStep(1)
                                            ->minutesStep(30)
                                    ])
                                    ->columnSpan(2)
                                    ->columns(2),
                                Fieldset::make('product minimal amount')
                                    ->label(__('admin.crud.create.settings.product.product'))
                                    ->schema([
                                        Forms\Components\TextInput::make('product_min_amount')
                                            ->label(__('admin.crud.create.settings.product.product_min_amount'))
                                            ->required()
                                            ->numeric()
                                            ->default(1),
                                    ])
                                    ->columnSpan(2)
                                    ->columns(2),
                            ])
                    ])->columns(2)
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('application_name')
                    ->label(__('admin.crud.create.settings.application_name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('application_email')
                    ->label(__('admin.crud.create.settings.application_email'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('main_logo')
                    ->label(__('admin.crud.create.settings.main_logo'))
                    ->square(),
                Tables\Columns\ImageColumn::make('footer_logo')
                    ->label(__('admin.crud.create.settings.footer_logo'))
                    ->square(),
                Tables\Columns\ImageColumn::make('favicon')
                    ->label(__('admin.crud.create.settings.favicon'))
                    ->square(),
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
                    // Tables\Actions\DeleteBulkAction::make(),
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
