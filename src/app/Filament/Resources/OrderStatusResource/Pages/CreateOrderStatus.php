<?php

namespace App\Filament\Resources\OrderStatusResource\Pages;

use App\Filament\Resources\OrderStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\OrderStatus;

class CreateOrderStatus extends CreateRecord
{
    protected static string $resource = OrderStatusResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $orderStatus = OrderStatus::create([
            'code' => $data['code'],
        ]);
        
        foreach ($data['translations'] as $translation) {
            $orderStatus->translations()->create([
                'name' => $translation['name'],
                'description' => $translation['description'] ?? null,
                'language_id' => $translation['language_id'],
            ]);
        }

        return $orderStatus;
    }
}
