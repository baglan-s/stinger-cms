<?php

namespace App\Repositories;

use App\Models\Catalog\PaymentType;
use App\Repositories\Repository;

class PaymentTypeRepository extends Repository
{
    protected $model = PaymentType::class;

}