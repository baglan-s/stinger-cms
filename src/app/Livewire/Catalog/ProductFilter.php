<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;
use App\Services\ProductCategoryService;
use Illuminate\Http\Request;
use App\Models\Catalog\ProductPrice;
use Illuminate\Support\Facades\Cookie;

class ProductFilter extends Component
{
    protected $listeners = [
        'contentFilterUpdated' => 'onContentFilterUpdated',
        'updatePriceRange' => 'onRangeUpdated',
    ];

    public bool $isMobile = false;

    public int $minPrice = 0;

    public int $maxPrice = 0;

    private ProductService $productService;

    private ProductCategoryService $productCategoryService;

    public array $filter = [];

    public $category = null;

    public function __construct()
    {
        $this->productService = app(ProductService::class);
        $this->productCategoryService = app(ProductCategoryService::class);
    }

    public function mount(bool $isMobile = false, array $filter = [], int $minPrice = 0, int $maxPrice = 0)
    {
        $this->isMobile = $isMobile;
        $this->filter = $filter;

        if (isset($this->filter['category_id'])) {
            $this->category = $this->productCategoryService->getRepository()
                ->model()
                ->where('id', $this->filter['category_id'])
                ->with([
                    'brands',
                    'specifications',
                    'specifications.values'
                ])
                ->first();
        }

        $this->minPrice = $minPrice;
        $this->maxPrice = $this->getMaxPrice(); 
    }

    public function render()
    {
        return $this->isMobile 
            ? view('livewire.catalog.product-filter-mobile') 
            : view('livewire.catalog.product-filter');
    }

    public function toggleBrands(int $brandId)
    {;
        $brandIds = isset($this->filter['brand_ids']) ? explode(',', $this->filter['brand_ids']) : [];
        
        if (in_array($brandId, $brandIds)) {
            $brandIds = array_diff($brandIds, [$brandId]);
        } else {
            $brandIds[] = $brandId;
        }

        $brandIdsString = implode(',', $brandIds);
        $filter = array_merge($this->filter, ['brand_ids' => $brandIdsString != '' ? $brandIdsString : null]);

        $this->updateFilter($filter);
    }

    public function onContentFilterUpdated(array $filter)
    {
        $this->filter = $filter;
    }

    public function updateFilter(array $filter)
    {
        $this->dispatch('filterUpdated', $filter);
    }

    public function toggleSpecificationValues(int $specificationId, int $specificationValueId)
    {
        $specs = isset($this->filter['specs']) ? explode(',', $this->filter['specs']) : [];
        $filteredSpecs = [];
        $existedSpecIds = [];

        if (!empty($specs)) {
            foreach ($specs as $spec) {
                $specParts = explode('-', $spec);
                $specId = $specParts[0];
                $specValueIds = explode(';', $specParts[1]);
                $existedSpecIds[] = $specId;
                
                if ($specId == $specificationId) {
                    if (in_array($specificationValueId, $specValueIds)) {
                        $specValueIds = array_diff($specValueIds, [$specificationValueId]);
                    } else {
                        $specValueIds[] = $specificationValueId;
                    }

                    if (!empty($specValueIds)) {
                        $filteredSpecs[] = $specId . '-' . implode(';', $specValueIds);
                    }
                } else {
                    $filteredSpecs[] = $spec;
                }
            }

            if (!in_array($specificationId, $existedSpecIds)) {
                $filteredSpecs[] = $specificationId . '-' . $specificationValueId;
            }
        } else {
            $filteredSpecs = [$specificationId . '-' . $specificationValueId];
        }
        

        $specsString = implode(',', $filteredSpecs);
        $filter = array_merge($this->filter, ['specs' => $specsString != '' ? $specsString : null]);

        $this->updateFilter($filter);
    }

    private function getMaxPrice(): int
    {
        return ProductPrice::whereHas('product')
            ->whereHas('product.category', function ($query) {
                $query->where('id', $this->filter['category_id']);
            })
            ->where('price_type_id', Cookie::get('price_type_id', config('price_types.region', 3)))
            ->orderBy('price', 'desc')
            ->limit(1)
            ->first()?->price ?? 0;
    }

    public function resetFilter()
    {
        $filterKeys = [
            'brand_ids',
            'specs',
            'price_from',
            'price_to',
            'available',
        ];
        $filter = [];

        foreach ($this->filter as $key => $value) {
            if (!in_array($key, $filterKeys)) {
                $filter[$key] = $this->filter[$key];
            }
        }

        $filter['price_from'] = $this->minPrice;
        $filter['price_to'] = $this->getMaxPrice();
        $this->updateFilter($filter);
    }

    public function onRangeUpdated($min, $max)
    {
        $this->updateFilter(array_merge($this->filter, [
            'price_from' => $min,
            'price_to' => $max,
        ]));
    }

    public function toggleAvailable()
    {
        $this->updateFilter(array_merge($this->filter, [
            'available' => !isset($this->filter['available']) || $this->filter['available'] === null ? 1 : null,
        ]));
    }

    private function resetPriceRange()
    {
        $this->minPrice = 0;
        $this->maxPrice = $this->getMaxPrice();
    }
}
