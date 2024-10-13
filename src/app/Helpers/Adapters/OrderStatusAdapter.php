<?php

namespace App\Helpers\Adapters;

use Illuminate\Support\Str;

class OrderStatusAdapter
{
    public static function adaptOneCOrderStatus(array $status): array
    {
        return [
            'guid' => $status['guid'],
            'code' => $status['guid'],
            'id_1c' => $status['id'],
            // 'active' =>!$brand['markedForDeletion'],
            // 'sort' => 0
        ];
    }

    public static function adaptOneCOrderStatusTranslation(array $status, string $languageId): array
    {
        return [
            'name' => $status['name'],
            'language_id' => $languageId,
        ];
    }
}