<?php

namespace App\Helpers\Adapters;

use App\Models\Catalog\Order;

class OrderAdapter
{
    public static function adaptOneCOrder(Order $order): array
    {
        $orderData = [
            'id' => (string)$order->id,
            'customer' => [
                'firstName' => $order->user->name,
                'lastName' => $order->user->last_name,
                'patronymic' => '',
                'email' => $order->user->email,
                'phone' => [
                    'countryCode' => $order->user->getPhoneArray()['countryCode'],
                    'operator' => $order->user->getPhoneArray()['operator'],
                    'number' => $order->user->getPhoneArray()['number'],
                ]
            ],
            'statusId' => $order->status->id_1c,
            'storeId' => (int)$order->store->id_1c,
            'delivery' => (bool)$order->is_delivery,
            'created' => $order->created_at,
            'paymentIds' => [],
            'products' => [],
            'courierPartner' => ''
        ];

        if ($order->is_delivery) {
            $orderData['deliveryAddress'] = [
                'country' => $order->deliveryAddress->country,
                'city' => $order->deliveryAddress->city,
                'street' => $order->deliveryAddress->street,
                'building' => $order->deliveryAddress->building,
                'apartment' => $order->deliveryAddress->apartment ?? '',
            ];
            $orderData['courierPartner'] = $order->delivery_company;
        }

        foreach ($order->items as $item) {
            $orderData['products'][] = [
                'id' => $item->product->id_1c,
                'name' => $item->product->translation()->name,
                'count' => (int)$item->quantity,
                'costPerUnit' => (int)$item->cost,
                'discountSum' => (int)$item->discount,
                'totalCost' => (int)$item->total,
            ];
        }

        return $orderData;    
    }
}