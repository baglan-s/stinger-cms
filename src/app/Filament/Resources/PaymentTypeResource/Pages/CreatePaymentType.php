<?php

namespace App\Filament\Resources\PaymentTypeResource\Pages;

use App\Filament\Resources\PaymentTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\PaymentType;

class CreatePaymentType extends CreateRecord
{
    protected static string $resource = PaymentTypeResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $type = PaymentType::create([
            'code' => $data['code'],
            'active' => $data['active'],
            'guid' => $data['guid'] ?? null,
            'id_1c' => $data['id_1c'] ?? null,
        ]);
        
        foreach ($data['translations'] as $translation) {
            $type->translations()->create([
                'name' => $translation['name'],
                'language_id' => $translation['language_id'],
            ]);
        }

        return $type;
    }
}
