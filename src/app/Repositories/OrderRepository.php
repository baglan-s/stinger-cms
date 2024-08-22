<?php

namespace App\Repositories;

use App\Models\Catalog\Order;
use App\Repositories\Repository;

class OrderRepository extends Repository
{
    protected $model = Order::class;

}