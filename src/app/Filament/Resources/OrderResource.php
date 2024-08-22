<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Catalog\Order;
use App\Models\Catalog\OrderStatus;
use App\Models\Catalog\Store;
use App\Models\User;
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


class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationGroup = 'Catalog';

    public static function form(Form $form): Form
    {
        $orderStatuses = OrderStatus::all();
        $stores = Store::all();
        $orderStatusOptions = [];
        $storeOptions = [];

        foreach ($orderStatuses as $orderStatus) {
            $orderStatusOptions[$orderStatus->id] = $orderStatus->translation()?->name;
        }

        foreach ($stores as $store) {
            $storeOptions[$store->id] = $store->translation()?->name;
        }

        return $form
            ->schema([
                Select::make('user_id')
                    ->label('User')
                    ->searchable()
                    ->getSearchResultsUsing(fn (string $search): array => User::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id')->toArray())
                    ->getOptionLabelUsing(fn ($value): ?string => User::find($value)?->name),
                Select::make('order_status_id')
                    ->label('Status')
                    ->options($orderStatusOptions)
                    ->searchable(),
                Select::make('store_id')
                    ->label('Store')
                    ->options($storeOptions)
                    ->searchable(),
                Forms\Components\Toggle::make('is_delivery')
                    ->required()
                    ->live(),
                Forms\Components\TextInput::make('delivery_company')
                    ->maxLength(255)
                    ->hidden(fn (Forms\Get $get): bool => !$get('is_delivery'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user')
                    ->state(fn (Order $order) => $order->user?->name)
                    ->label('User'),
                Tables\Columns\TextColumn::make('delivery_address')
                    ->state(fn (Order $order) => $order->deliveryAddress?->getFulAddress())
                    ->label('Delivery address'),
                Tables\Columns\TextColumn::make('store')
                    ->state(fn (Order $order) => $order->store?->translation()?->name)
                    ->label('Store'),
                Tables\Columns\TextColumn::make('status')
                    ->state(fn (Order $order) => $order->status?->translation()?->name)
                    ->label('Status'),
                Tables\Columns\IconColumn::make('is_delivery')
                    ->label('Delivery')
                    ->boolean(),
                Tables\Columns\TextColumn::make('delivery_company')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total')
                    ->state(fn (Order $order) => $order->items->sum('total')),
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
            RelationManagers\ItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
