<?php

namespace App\Repositories;

use App\Models\Catalog\OrderStatus;
use App\Repositories\Repository;

class OrderStatusRepository extends Repository
{
    protected $model = OrderStatus::class;

}