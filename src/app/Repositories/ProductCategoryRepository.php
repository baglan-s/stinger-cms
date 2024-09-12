<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Catalog\ProductCategory;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;

class ProductCategoryRepository extends Repository
{
    protected $model = ProductCategory::class;

    public function getWithChildren()
    {
        return Cache::remember('categories', 86400, function () {
            return $this->model()
                ->whereNull('parent_id')
                ->where('active', true)
                ->with([
                    'children' => function (Builder $query) {
                        $query->where('active', true);
                    },
                    'children.children'
                ])
                ->get();
        });
    }

    public function getBySlug(string $slug)
    {
        return Cache::remember('category_'. $slug, 86400, function () use ($slug) {
            return $this->model()
                ->with('children')
                ->whereHas('translations', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })
                ->first();
        });
    }
    
}