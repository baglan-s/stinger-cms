<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategoryResource\Pages;
use App\Filament\Resources\ProductCategoryResource\RelationManagers;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\Specification;
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

class ProductCategoryResource extends Resource
{
    protected static ?string $model = ProductCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Catalog';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.product.categories.title');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();
        $categories = ProductCategory::all();
        $specifications = Specification::where('active', true)->get();
        $categoryOptions = [];
        $specificationOptions = [];
        $tabs = [];

        foreach ($specifications as $specification) {
            $specificationOptions[$specification->id] = $specification->translation()?->name;
        }

        foreach ($categories as $category) {
            $categoryOptions[$category->id] = $category->translation()?->name;
        }

        foreach ($languages as $language) {
            $tabs[] = Tabs\Tab::make($language->name)
                ->schema([
                    TextInput::make('translations.' . $language->code . '.name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.meta_title')
                        ->label('Meta Title')
                        ->maxLength(255),
                    TextInput::make('translations.' . $language->code . '.slug')
                        ->label('Slug')
                        ->maxLength(255),
                    TextArea::make('translations.' . $language->code . '.description')
                        ->label('Description')
                        ->rows(8),
                    TextArea::make('translations.' . $language->code . '.meta_description')
                        ->label('Meta Description')
                        ->rows(8),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('parent_id')
                    ->label('Parent')
                    ->options($categoryOptions),
                TextInput::make('guid')
                    ->label('GUID'),
                TextInput::make('sort')
                    ->label('Sort')
                    ->default(1)
                    ->required()
                    ->integer(),
                FileUpload::make('image')
                    ->label('Image')
                    ->required()
                    ->directory('images/product-categories'),
                Toggle::make('active')
                    ->default(true),
                Tabs::make('translations')
                    ->label('Translations')
                    ->tabs($tabs)
                    ->columnSpan(2),
                Select::make('specifications')
                    ->label('Specifications')
                    ->options($specificationOptions)
                    ->multiple()
                    ->searchable()
                    ->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->square(),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (ProductCategory $category) => $category->translation()?->name)
                    ->label('Name')
                    ->searchable(
                        query: function (Builder $query, string $search): Builder {
                            return $query->whereHas('translations', function (Builder $query) use ($search) {
                                $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                            });
                        }
                    ),
                Tables\Columns\TextColumn::make('parent')
                    ->state(fn (ProductCategory $category) => $category->parent?->translation()?->name)
                    ->label('Parent'),
                Tables\Columns\IconColumn::make('active')
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
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategory::route('/create'),
            'edit' => Pages\EditProductCategory::route('/{record}/edit'),
        ];
    }
}
