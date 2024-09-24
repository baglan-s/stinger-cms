<?php

namespace App\Filament\Resources\ProductStockResource\Pages;

use App\Filament\Resources\ProductStockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductStock extends EditRecord
{
    protected static string $resource = ProductStockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
