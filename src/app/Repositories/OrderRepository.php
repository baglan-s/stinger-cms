<?php

namespace App\Repositories;

use App\Models\Catalog\Order;
use App\Repositories\Repository;

class OrderRepository extends Repository
{
    protected $model = Order::class;

    public function filter(array $filter)
    {
        return $this->model()
            ->when(isset($filter['user_id']), function ($query) use ($filter) {
                $query->where('user_id', $filter['user_id']);
            })
            ->when(isset($filter['status']), function ($query) use ($filter) {
                $query->whereHas('status', function ($query) use ($filter) {
                    switch ($filter['status']) {
                        case 'active':
                            $query->where('code', '!=', config('app.order.status_canceled'));
                            break;
                        case 'canceled':
                            $query->where('code', config('app.order.status_canceled'));
                            break;
                        default:
                            $query;
                            break;
                    }
                });
            })
            ->with([
                'items',
                'items.product',
                'user',
                'deliveryAddress',
                'status',
                'payments',
                'payments.type',
            ]);
    }
}