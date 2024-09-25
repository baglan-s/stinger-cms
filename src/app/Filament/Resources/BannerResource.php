<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Language;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Components';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.components.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.banners');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.banners');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.banners.banner');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.title')
                        ->label(__('admin.crud.create.banners.title'))
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.subtitle')
                        ->label(__('admin.crud.create.banners.subtitle'))
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.link')
                        ->label(__('admin.crud.create.link'))
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                TextInput::make('name')
                        ->label(__('admin.crud.create.name'))
                        ->required()
                        ->maxLength(255),
                FileUpload::make('image')
                    ->label(__('admin.crud.create.image'))
                    ->required()
                    ->directory('images/banners'),
                Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->default(true),
                TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->default(1)
                    ->required()
                    ->integer(),
                Tabs::make('translations')
                    ->label('Translations')
                    ->tabs($tabs),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('admin.crud.create.image'))
                    ->square(),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
