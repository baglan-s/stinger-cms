<?php

namespace App\Repositories;

use App\Models\Catalog\Product;
use App\Repositories\Repository;

class ProductRepository extends Repository
{
    protected $model = Product::class;

    public function latest(int $limit = 10)
    {
        return $this->model()
            ->whereNull('parent_id')
            ->latest()
            ->limit($limit)
            ->get();
    }

    public function popular(int $limit = 10)
    {
        return $this->model()
            ->whereNull('parent_id')
            ->orderBy('views', 'desc')
            ->limit($limit)
            ->get();
    }

    public function discounted(int $limit = 10)
    {
        return $this->model()
            ->whereNull('parent_id')
            ->limit($limit)
            ->get();
    }
}