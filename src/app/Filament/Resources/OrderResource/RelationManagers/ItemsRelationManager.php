<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextArea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Models\Catalog\OrderItem;
use App\Models\Catalog\Product;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('product_id')
                    ->label('Product')
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
                Forms\Components\TextInput::make('quantity')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Forms\Components\TextInput::make('discount')
                    ->required()
                    ->default(0)
                    ->numeric(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('product_id')
                    ->label('Product')
                    ->state(fn (OrderItem $item) => $item->product?->translation()?->name)
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('product', function (Builder $query) use ($search) {
                            $query->whereHas('translations', function (Builder $query) use ($search) {
                                $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                            });
                        });
                    }),
                Tables\Columns\TextColumn::make('quantity')
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cost')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $city = $this->getOwnerRecord()?->store?->city;
                        $product = Product::where('id', $data['product_id'])
                            ->with(['prices' => function ($query) use ($city) {
                                $query->where('price_type_id', $city->price_type_id);
                            }])->first();
                        $productPrice = $product->prices?->first()?->price ?? 0;

                        $data['cost'] = $productPrice;
                        $data['total'] = $productPrice * $data['quantity'];

                        return $data;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $city = $this->getOwnerRecord()?->store?->city;
                        $product = Product::where('id', $data['product_id'])
                            ->with(['prices' => function ($query) use ($city) {
                                $query->where('price_type_id', $city->price_type_id);
                            }])->first();
                        $productPrice = $product->prices?->first()?->price ?? 0;

                        $data['cost'] = $productPrice;
                        $data['total'] = $productPrice * $data['quantity'];

                        return $data;
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
