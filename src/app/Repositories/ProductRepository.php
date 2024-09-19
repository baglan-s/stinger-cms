<?php

namespace App\Repositories;

use App\Models\Catalog\PriceType;
use App\Models\Catalog\Product;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\Catalog\ProductPrice;

class ProductRepository extends Repository
{
    protected $model = Product::class;

    private array $favouriteProductIds = [];

    public function __construct()
    {
        $this->favouriteProductIds = json_decode(
            Cookie::get('favourite_products', json_encode([])),
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

    public function similar(int $categoryId, int $limit = 10)
    {
        return $this->filter(['category_id' => $categoryId])
            ->limit($limit)
            ->get();
    }

    public function getFavouriteProductIds()
    {
        return $this->favouriteProductIds;
    }

    public function addFavouriteProductId(int $productId)
    {
        $this->favouriteProductIds[] = $productId;

        Cookie::queue('favourite_products', json_encode($this->favouriteProductIds), 43200);
    }

    public function removeFavouriteProductId(int $productId)
    {
        $key = array_search($productId, $this->favouriteProductIds);

        if ($key !== false) {
            unset($this->favouriteProductIds[$key]);
        }

        Cookie::queue('favourite_products', json_encode($this->favouriteProductIds), 43200);
    }

    public function clearFavouriteProductIds()
    {
        $this->favouriteProductIds = [];
        Cookie::queue('favourite_products', json_encode([]), -1);
    }

    public function getFavouriteProducts($limit = null)
    {
        $favourites = $this->model()
            ->whereIn('id', $this->favouriteProductIds);

        return $limit ? $favourites->limit($limit)->get() : $favourites->get();
    }

    public function hasFavouriteProducts(): bool
    {
        return $this->favouriteProductsCount() > 0;
    }

    public function favouriteProductsCount()
    {
        return count($this->favouriteProductIds);
    }

    public function filter(array $filter)
    {
        return $this->model()
            ->when(isset($filter['search']), function ($query) use ($filter) {
                $query->whereHas('translations', function ($query) use ($filter) {
                    $query->whereRaw("lower(name) LIKE '%". mb_strtolower($filter['search']). "%'");
                });
            })
            ->when(isset($filter['category_id']), function ($query) use ($filter) {
                $query->where('product_category_id', $filter['category_id']);
            })
            ->when(isset($filter['brand_id']), function ($query) use ($filter) {
                $query->where('brand_id', $filter['brand_id']);
            })
            ->when(isset($filter['brand_ids']) && !empty($filter['brand_ids']), function ($query) use ($filter) {
                $query->whereIn('brand_id', explode(',', $filter['brand_ids']));
            })
            ->when(isset($filter['parent_id']), function ($query) use ($filter) {
                $query->where('parent_id', $filter['parent_id']);
            })
            ->when(isset($filter['lowered']) && $filter['lowered'], function ($query) {
                $query->whereNotNull('parent_id');
            })
            ->when((!isset($filter['lowered']) || !$filter['lowered']) && !isset($filter['parent_id']), function ($query) {
                $query->whereNull('parent_id');
            })
            ->when(isset($filter['discount']) && $filter['discount'], function ($query) {
                $query->whereNotNull('parent_id');
            })
            ->when(isset($filter['available']) && $filter['available'], function ($query) {
                $query->whereNotNull('parent_id');
            })
            ->when(isset($filter['order']), function ($query) use ($filter) {
                switch ($filter['order']) {
                    case 'popular':
                        $query->orderBy('views', 'desc');
                        break;
                    case 'novelty':
                        $query->orderBy('created_at', 'asc');
                        break;
                    case 'price_up':
                        $query->orderBy(
                            ProductPrice::select('price')
                                ->whereColumn('products.id', '=', 'product_prices.product_id')
                                ->where('price_type_id', Cookie::get('price_type_id', 3)), 
                            'asc'
                        );
                        break;
                    case 'price_down':
                        $query->orderBy(
                            ProductPrice::select('price')
                                ->whereColumn('products.id', '=', 'product_prices.product_id')
                                ->where('price_type_id', Cookie::get('price_type_id', 3)), 
                            'desc'
                        );
                        break;
                    default:
                        $query->orderBy('created_at', 'asc');
                        break;
                }
            })
            ->with([
                'prices'
            ]);
    }
}