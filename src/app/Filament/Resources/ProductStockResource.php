<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductStockResource\Pages;
use App\Filament\Resources\ProductStockResource\RelationManagers;
use App\Models\Catalog\ProductStock;
use App\Models\Catalog\Store;
use App\Models\Catalog\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductStockResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    protected static ?string $navigationGroup = 'Catalog';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.product.stock.title');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('store_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('available')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        $stores = Store::all();
        $columns = [
            Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
            Tables\Columns\TextColumn::make('name')
                ->state(fn (Product $product) => $product->translation()?->name)
                ->label('Name')
                ->searchable(query: function (Builder $query, string $search): Builder {
                    return $query->whereHas('translations', function (Builder $query) use ($search) {
                        $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                    });
                }),
        ];

        foreach ($stores as $store) {
            $columns[] = Tables\Columns\TextColumn::make('store_id_' . $store->id)
                ->label($store->translation()?->name ?? $store->id)
                ->state(function (Product $product) use ($store) {
                    return $product->stocks()->where('store_id', $store->id)->first()?->available ?? 0;
                });
        }
        
        $columns = array_merge($columns, [
            Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ]);

        return $table
            ->columns($columns)
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
            'index' => Pages\ListProductStocks::route('/'),
            'create' => Pages\CreateProductStock::route('/create'),
            'edit' => Pages\EditProductStock::route('/{record}/edit'),
        ];
    }
}
