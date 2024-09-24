<?php

namespace App\Helpers\Adapters;

use App\Models\Catalog\Order;

class OrderAdapter
{
    public static function adaptOneCOrder(Order $order): array
    {
        $orderData = [
            'id' => $order->id,
            'customer' => [
                'firstName' => $order->user->name,
                'lastName' => $order->user->last_name,
                'email' => $order->user->email,
                'phone' => [
                    'countryCode' => $order->user->getPhoneArray()['countryCode'],
                    'operator' => $order->user->getPhoneArray()['operator'],
                    'number' => $order->user->getPhoneArray()['number'],
                ]
            ],
            'storeId' => $order->store->id_1c,
            'delivery' => $order->is_delivery,
            'created' => $order->created_at,
            'deliveryAddress' => [
                'country' => $order->deliveryAddress->country,
                'city' => $order->deliveryAddress->city,
                'street' => $order->deliveryAddress->street,
                'building' => $order->deliveryAddress->building,
                'apartment' => $order->deliveryAddress->apartment,
            ],
            'courierPartner' => $order->delivery_company,
            'products' => []
        ];

        foreach ($order->items as $item) {
            $orderData['products'][] = [
                'productId' => $item->product->id_1c,
                'name' => $item->product->translation()->name,
                'count' => $item->quantity,
                'costPerUnit' => $item->cost,
                'discountSum' => $item->discount,
                'totalCost' => $item->total,
            ];
        }

        return $orderData;
    }
}