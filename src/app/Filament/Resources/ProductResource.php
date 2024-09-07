<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Catalog\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Language;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\Brand;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Helpers\CategoryHelper;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'Catalog';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.product.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.product.title');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.products.product');
    }

    public static function form(Form $form): Form
    {
        $languages = Language::where('active', true)->get();

        $brands = Brand::with([
            'translations' => fn ($query) => $query->select(['name']),
        ])
            ->select(['id'])
            ->get();

        $brandOptions = [];
        $tabs = [];

        foreach ($brands as $brand) {
            $brandOptions[$brand->id] = $brand->translation()?->name;
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
                    TextInput::make('translations.' . $language->code . '.meta_title')
                        ->label(__('admin.seo.meta_title'))
                        ->maxLength(255),
                    Textarea::make('translations.' . $language->code . '.meta_description')
                        ->label(__('admin.seo.meta_description'))
                        ->rows(8),
                    Forms\Components\Toggle::make('translations.' . $language->code . '.is_html')
                        ->label(__('HTML'))
                        ->default(false)
                        ->live(),
                    RichEditor::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.description'))
                        ->fileAttachmentsDirectory('images/products/content')
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
                    Textarea::make('translations.' . $language->code . '.content')
                        ->label(__('admin.crud.create.description'))
                        ->rows(8)
                        ->hidden(fn (Forms\Get $get): bool => !$get('translations.' . $language->code . '.is_html')),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Select::make('product_category_id')
                    ->label(__('admin.crud.create.products.category'))
                    ->searchable()
                    ->getSearchResultsUsing(function (string $search): array {
                        $categories = ProductCategory::whereHas('translations', function ($query) use ($search) {
                                $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                            })
                            ->with(['translations' => function ($query) {
                                $query->whereHas('language', function ($q) {
                                    $q->where('code', app()->getLocale());
                                });
                            }])
                            ->limit(30)
                            ->get();

                         return $categories->mapWithKeys(function ($category) {
                             return [$category->id => $category->translation()?->name];
                         })->toArray();
                    })
                    ->getOptionLabelUsing(fn ($value): ?string => ProductCategory::find($value)?->translation()?->name)
                    ->live(),
                Select::make('brand_id')
                    ->label(__('admin.crud.create.brands.brand'))
                    ->searchable()
                    ->options($brandOptions),
                Select::make('parent_id')
                    ->label(__('admin.crud.create.parent_id'))
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
                Forms\Components\TextInput::make('guid')
                    ->label(__('admin.crud.create.guid')),
                Forms\Components\TextInput::make('weight')
                    ->label(__('admin.crud.create.products.weight'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight_unit')
                    ->label(__('admin.crud.create.products.weight_unit'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('volume')
                    ->label(__('admin.crud.create.products.volume'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('volume_unit')
                    ->label(__('admin.crud.create.products.volume_unit'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('article')
                    ->label(__('admin.crud.create.products.article'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->required(),
                Tabs::make('translations')
                    ->label(__('admin.crud.create.translations'))
                    ->tabs($tabs)
                    ->columnSpan(2),
                FileUpload::make('images')
                    ->label(__('admin.crud.create.images'))
                    ->multiple()
                    ->directory('images/products')
                    ->columnSpan(2),
                Section::make('Specifications')
                    ->label(__('admin.navigation.product.specs.title'))
                    ->description(__('admin.crud.create.products.choose_specs'))
                    ->schema(function (Forms\Get $get): array {
                        $schema = [];

                        if (!$get('product_category_id')) {
                            return $schema;
                        }

                        $categorySpecifications = ProductCategory::find($get('product_category_id'))
                            ->specifications()
                            ->with('values')
                            ->get();

                        foreach ($categorySpecifications as $categorySpecification) {
                            $schema[] = Forms\Components\Select::make('specifications.'. $categorySpecification->id)
                                ->label($categorySpecification->translation()?->name)
                                ->options(function () use ($categorySpecification) {
                                    $options = [];

                                    foreach ($categorySpecification->values as $value) {
                                        $options[$value->id] = $value->translation()?->name;
                                    }
                                    
                                    return $options;
                                })
                                ->multiple($categorySpecification->multiple);
                        }

                        return $schema;
                    })
                    ->columns(2)
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
                    ->state(fn (Product $product) => $product->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('translations', function (Builder $query) use ($search) {
                            $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                        });
                    }),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('admin.crud.create.images'))
                    ->state(fn (Product $product) => $product->images()->first()?->path)
                    ->square(),
                Tables\Columns\TextColumn::make('category')
                    ->state(fn (Product $product) => $product->category?->translation()?->name)
                    ->label(__('admin.crud.create.products.category')),
                Tables\Columns\TextColumn::make('brand')
                    ->state(fn (Product $product) => $product->brand?->translation()?->name)
                    ->label(__('admin.crud.create.brands.brand')),
                Tables\Columns\TextColumn::make('views')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort')
                    ->label(__('admin.crud.create.sort'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->label(__('admin.crud.create.active'))
                    ->boolean(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
