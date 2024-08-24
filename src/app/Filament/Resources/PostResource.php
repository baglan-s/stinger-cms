<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Post\PostCategory;
use App\Models\Language;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\RichEditor;
use App\Helpers\CategoryHelper;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Posts';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.posts.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.posts.post');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.posts.title');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.posts.categories.category');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $categoryOptions = CategoryHelper::getCategoriesTree(
            PostCategory::whereNull('parent_id')
                ->with('children')
                ->get()
        );
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.title')
                        ->label(__('admin.crud.create.title'))
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label(__('admin.crud.create.slug'))
                        ->maxLength(255),
                    TagsInput::make('translations.' . $language->code . '.meta_keywords')
                        ->label(__('admin.seo.meta_keywords'))
                        ->separator(','),
                    // TextArea::make('translations.' . $language->code . '.meta_description')
                    //     ->label(__('admin.crud.create.description'))
                    //     ->rows(8),
                    RichEditor::make('translations.' . $language->code . '.content')
                        ->label(__('admin.crud.create.content'))
                        ->fileAttachmentsDirectory('images/posts')
                        ->toolbarButtons([
                            'attachFiles',
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h1',
                            'h2',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ]),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('post_category_id')
                    ->label(__('admin.crud.create.posts.post_category_id'))
                    ->searchable()
                    ->options($categoryOptions),
                FileUpload::make('image')
                    ->label(__('admin.crud.create.posts.main_images'))
                    ->directory('images/posts'),
                Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->default(true),
                Tabs::make('translations')
                    ->label(__('admin.crud.create.translations'))
                    ->tabs($tabs),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id')),
                Tables\Columns\TextColumn::make('category')
                    ->state(fn (Post $post) => $post->category?->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->state(fn (Post $post) => $post->translation()?->title)
                    ->label(__('admin.crud.create.title'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('admin.crud.create.title'))
                    ->square(),
                Tables\Columns\IconColumn::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('views')
                    ->label('Views'),
                Tables\Columns\TextColumn::make('author')
                    ->state(fn (Post $post) => $post->author?->name)
                    ->label(__('admin.crud.create.author'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
