<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductReviewResource\Pages;
use App\Filament\Resources\ProductReviewResource\RelationManagers;
use App\Models\Catalog\ProductReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Catalog\Product;
use Filament\Forms\Components\Select;

class ProductReviewResource extends Resource
{
    protected static ?string $model = ProductReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center';

    protected static ?string $navigationGroup = 'Catalog';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.product.reviews.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.product.reviews.title');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.product_reviews.review');
    }

    public static function form(Form $form): Form
    {
        $productOptions = [];
        $products = Product::with([
            'translations' => fn ($query) => $query->select(['name']),
        ])
            ->select(['id'])
            ->get();
        
        foreach ($products as $product) {
            $productOptions[$product->id] = $product->translation()?->name;
        }

        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->label(__('admin.crud.create.product_reviews.product_id'))
                    ->options($productOptions)
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rating')
                    ->label(__('admin.crud.create.product_reviews.rating'))
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Textarea::make('content')
                    ->label(__('admin.crud.create.content'))
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product')
                    ->state(fn (ProductReview $review) => $review->product?->translation()?->name)
                    ->searchable(
                        query: function (Builder $query, string $search): Builder {
                            return $query->whereHas('product', function (Builder $query) use ($search) {
                                $query->whereHas('translations', function (Builder $query) use ($search) {
                                    $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                                });
                            });
                        }    
                    )
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin.crud.create.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
                    ->label(__('admin.crud.create.product_reviews.rating'))
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListProductReviews::route('/'),
            'create' => Pages\CreateProductReview::route('/create'),
            'edit' => Pages\EditProductReview::route('/{record}/edit'),
        ];
    }
}
