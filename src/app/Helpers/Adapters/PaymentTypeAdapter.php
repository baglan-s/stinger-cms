<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;

class PaymentTypeAdapter
{
    public static function adaptOneCPaymentType(array $type): array
    {
        return [
            'guid' => $type['guid'],
            'code' => $type['guid'],
            'id_1c' => $type['id'],
            // 'active' =>!$brand['markedForDeletion'],
            // 'sort' => 0
        ];
    }

    public static function adaptOneCPaymentTypeTranslation(array $type, string $languageId): array
    {
        return [
            'name' => $type['name'],
            'language_id' => $languageId,
        ];
    }
}