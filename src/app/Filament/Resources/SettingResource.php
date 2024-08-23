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

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.system.settings');
    }

    public static function form(Form $form): Form
    {
        $products = Product::with([
            'translations' => fn ($query) => $query->select(['name']),
        ])
            ->select(['id'])
            ->get();
        $languages = Language::where('active', true)->get();
        $productOptions = [];
        $languageOptions = [];

        foreach ($products as $product) {
            $productOptions[$product->id] = $product->translation()?->name;
        }

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
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('application_email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                FileUpload::make('main_logo')
                                    ->label('Main logo')
                                    ->directory('images/settings'),
                                FileUpload::make('footer_logo')
                                    ->label('Footer logo')
                                    ->directory('images/settings'),
                                FileUpload::make('favicon')
                                    ->label('Favicon')
                                    ->directory('images/settings'),
                                Select::make('language_id')
                                    ->label('System language')
                                    ->options($languageOptions)
                                    ->searchable(),
                            ]),
                        Tabs\Tab::make('Marketing')
                            ->schema([
                                Select::make('weekly_product_id')
                                    ->label('Weekly product')
                                    ->options($productOptions)
                                    ->searchable(),
                                DateTimePicker::make('weekly_product_starts_at')
                                    ->label('Weekly product starts')
                                    ->minDate(now())
                                    ->native(false)
                                    ->hoursStep(1)
                                    ->minutesStep(30),
                                DateTimePicker::make('weekly_product_ends_at')
                                    ->label('Weekly product ends')
                                    ->minDate(now())
                                    ->native(false)
                                    ->hoursStep(1)
                                    ->minutesStep(30)
                            ])
                    ])->columns(2)
            ])->columns(1);
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
