<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderStatusResource\Pages;
use App\Filament\Resources\OrderStatusResource\RelationManagers;
use App\Models\Catalog\OrderStatus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Hidden;
use App\Models\Language;

class OrderStatusResource extends Resource
{
    protected static ?string $model = OrderStatus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Catalog';

    public static function getNavigationGroup(): string
    {
        return __('admin.navigation.catalog.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('admin.navigation.orders.statuses');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin.navigation.orders.statuses');
    }

    public static function getModelLabel(): string
    {
        return __('admin.crud.create.orders.statuses.status');
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
                    TextInput::make('translations.' . $language->code . '.description')
                        ->label(__('admin.crud.create.description'))
                        ->maxLength(255),
                    Hidden::make('translations.' . $language->code . '.language_id')
                        ->label(__('admin.crud.create.language_id'))
                        ->default($language->id),
                ]);
        }

        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->label(__('admin.crud.create.code'))
                    ->required()
                    ->maxLength(255),
                Tabs::make('translations')
                    ->label(__('admin.crud.create.translations'))
                    ->tabs($tabs)
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin.crud.create.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->state(fn (OrderStatus $status) => $status->translation()?->name)
                    ->label(__('admin.crud.create.name'))
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query->whereHas('translations', function (Builder $query) use ($search) {
                            $query->whereRaw("lower(name) LIKE '%" . mb_strtolower($search) . "%'");
                        });
                    }),
                Tables\Columns\TextColumn::make('code')
                    ->label(__('admin.crud.create.code'))
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
            'index' => Pages\ListOrderStatuses::route('/'),
            'create' => Pages\CreateOrderStatus::route('/create'),
            'edit' => Pages\EditOrderStatus::route('/{record}/edit'),
        ];
    }
}
