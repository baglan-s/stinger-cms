<?php

namespace App\Helpers\Adapters;

use App\Models\Catalog\Order;

class OrderAdapter
{
    public static function adaptOneCOrder(Order $order): array
    {
        return [
            'id' => $order->id,
            'customer' => [
                'firstName' => $order->user->name,
                'lastName' => $order->user->last_name,
                'email' => $order->user->email,
                'phone' => [
                    'countryCode' => '',
                    'operator' => '',
                    'number' => '',
                ]
            ],
            'store_id' => $order->store->id_1c,
            'delivery' => $order->is_delivery,
            'created' => $order->created_at,
        ];
    }
}