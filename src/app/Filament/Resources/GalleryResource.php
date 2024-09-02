<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
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

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationGroup = 'Components';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.components.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.galleries');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.galleries');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.galleries.gallery');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label(__('admin.crud.create.name'))
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label('Slug')
                        ->label(__('admin.crud.create.slug'))
                        ->maxLength(255),
                    Textarea::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.description'))
                        ->rows(8),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                TextInput::make('code')
                    ->label(__('admin.crud.create.code'))
                    ->required(),
                TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->default(1)
                    ->required()
                    ->integer(),
                FileUpload::make('images')
                    ->label(__('admin.crud.create.images'))
                    ->multiple()
                    ->directory('images/galleries'),
                Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->default(true),
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
                Tables\Columns\TextColumn::make('Name')
                    ->state(fn (Gallery $gallery) => $gallery->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->state(fn (Gallery $gallery) => $gallery->images[0]?->path)
                    ->label(__('admin.crud.create.image'))
                    ->square(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('author')
                    ->state(fn (Gallery $gallery) => $gallery->author?->name)
                    ->label('Author')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
