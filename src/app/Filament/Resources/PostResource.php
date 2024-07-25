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

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Posts';

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $categoryOptions = self::getCategoryOptions(
            PostCategory::whereNull('parent_id')
                ->with('children')
                ->get()
        );
        $tabs = [];

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.title')
                        ->label('Title')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label('Slug')
                        ->maxLength(255),
                    TagsInput::make('translations.' . $language->code . '.meta_keywords')
                        ->label('Meta Keywords')
                        ->separator(','),
                    TextArea::make('translations.' . $language->code . '.meta_description')
                        ->label('Meta Description')
                        ->rows(8),
                    RichEditor::make('translations.' . $language->code . '.content')
                        ->label('Content')
                        ->fileAttachmentsDirectory('posts/images')
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
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('post_category_id')
                    ->label('Category')
                    ->searchable()
                    ->options($categoryOptions),
                FileUpload::make('image')
                    ->label('Main image')
                    ->directory('posts/images'),
                Toggle::make('active')
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
                    ->label('ID'),
                Tables\Columns\TextColumn::make('category')
                    ->state(fn (Post $post) => $post->category?->translation()?->name)
                    ->label('Category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->state(fn (Post $post) => $post->translation()?->title)
                    ->label('Title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->square(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('views')
                    ->label('Views'),
                Tables\Columns\TextColumn::make('author')
                    ->state(fn (Post $post) => $post->author?->name)
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getCategoryOptions(iterable $categories, $iteration = 0): array
    {
        $options = [];

        foreach ($categories as $category) {
            if (!$category->parent_id) {
                $options[$category->id] = $category->translation()?->name;
                $iteration = 0;
            } else {
                $options[$category->id] = ' ' . str_repeat('-', $iteration) . ' ' . $category->translation()?->name;
            }

            if ($category->children->count() > 0) {
                $iteration++;

                foreach ($category->children as $child) {
                    $options[$child->id] = ' ' . str_repeat('-', $iteration) . ' ' . $child->translation()?->name;

                    if ($child->children->count() > 0) {
                        $options = array_merge($options, self::getCategoryOptions($child->children, $iteration + 1));
                    }
                }
            }
        }

        return $options;
    }
}
