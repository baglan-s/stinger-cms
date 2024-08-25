<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostCategoryResource\Pages;
use App\Filament\Resources\PostCategoryResource\RelationManagers;
use App\Models\Post\PostCategory;
use App\Models\Post\PostCategoryTranslation;
use App\Models\Language;
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
use Illuminate\Validation\Rules\Unique;
use App\Helpers\CategoryHelper;

class PostCategoryResource extends Resource
{
    protected static ?string $model = PostCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-plus';

    protected static ?string $navigationGroup = 'Posts';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.posts.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.posts.categories');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.posts.categories');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.posts.categories.category');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $tabs = [];
        $categoryOptions = CategoryHelper::getCategoriesTree(PostCategory::all());

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
                    TextArea::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.description'))
                        ->rows(8),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('parent_id')
                    ->label(__('admin.crud.create.parent_id'))
                    ->options($categoryOptions),
                TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->default(1)
                    ->required()
                    ->integer(),
                Tabs::make('translations')
                    ->label(__('admin.crud.create.translations'))
                    ->tabs($tabs),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (PostCategory $post) => $post->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->state(fn (PostCategory $post) => $post->translation()?->slug)
                    ->label(__('admin.crud.create.slug'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent')
                    ->state(fn (PostCategory $post) => $post->parent?->translation()?->name)
                    ->label(__('admin.crud.create.parent'))
                    ->searchable(),
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
            'index' => Pages\ListPostCategories::route('/'),
            'create' => Pages\CreatePostCategory::route('/create'),
            'edit' => Pages\EditPostCategory::route('/{record}/edit'),
        ];
    }
}
