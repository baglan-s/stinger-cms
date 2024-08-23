<?php

namespace App\Repositories;

use App\Models\Catalog\Product;
use App\Repositories\Repository;

class ProductRepository extends Repository
{
    protected $model = Product::class;

    
}