<?php

namespace App\Repositories;

use App\Models\Catalog\Product;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Cookie;

class ProductRepository extends Repository
{
    protected $model = Product::class;

    private array $favouriteProductIds = [];
    private array $comparisonProductIds = [];

    public function __construct()
    {
        $this->favouriteProductIds = json_decode(
            Cookie::get('favourite_products', json_encode([])),
            true
        );

        $this->comparisonProductIds = json_decode(
            Cookie::get('comparison_products', json_encode([])),
            true
        );
    }

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

    public function getFavouriteProductIds()
    {
        return $this->favouriteProductIds;
    }

    public function getComparisonProductIds()
    {
        return $this->comparisonProductIds;
    }

    public function addFavouriteProductId(int $productId)
    {
        $this->favouriteProductIds[] = $productId;

        Cookie::queue('favourite_products', json_encode($this->favouriteProductIds), 43200);
    }

    public function addComparisonProductId(int $productId)
    {
        $this->comparisonProductIds[] = $productId;

        Cookie::queue('comparison_products', json_encode($this->comparisonProductIds), 43200);
    }

    public function removeFavouriteProductId(int $productId)
    {
        $key = array_search($productId, $this->favouriteProductIds);

        if ($key !== false) {
            unset($this->favouriteProductIds[$key]);
        }

        Cookie::queue('favourite_products', json_encode($this->favouriteProductIds), 43200);
    }

    public function removeComparisonProductId(int $productId)
    {
        $key = array_search($productId, $this->favouriteProductIds);

        if ($key !== false) {
            unset($this->comparisonProductIds[$key]);
        }

        Cookie::queue('comparison_products', json_encode($this->comparisonProductIds), 43200);
    }

    public function clearFavouriteProductIds()
    {
        $this->favouriteProductIds = [];
        Cookie::queue('favourite_products', json_encode([]), -1);
    }

    public function clearComparisonProductIds()
    {
        $this->comparisonProductIds = [];
        Cookie::queue('comparison_products', json_encode([]), -1);
    }

    public function getFavouriteProducts($limit = null)
    {
        $favourites = $this->model()
            ->whereIn('id', $this->favouriteProductIds);

        return $limit ? $favourites->limit($limit)->get() : $favourites->get();
    }

    public function getComparisonProducts($limit = null)
    {
        $comparison = $this->model()
            ->whereIn('id', $this->comparisonProductIds);

        return $limit ? $comparison->limit($limit)->get() : $comparison->get();
    }

    public function hasFavouriteProducts(): bool
    {
        return $this->favouriteProductsCount() > 0;
    }

    public function hasComparisonProducts(): bool
    {
        return $this->comparisonProductsCount() > 0;
    }

    public function favouriteProductsCount()
    {
        return count($this->favouriteProductIds);
    }

    public function comparisonProductsCount()
    {
        return count($this->comparisonProductIds);
    }
}