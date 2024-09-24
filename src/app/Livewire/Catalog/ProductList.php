<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class ProductList extends Component
{
    use WithPagination;

    protected $listeners = [
        'orderSet' => 'onOrderSet',
        'filterUpdated' => 'onFilterUpdated',
    ];

    private ProductService $productService;

    public array $filter = [];

    public int|null $category_id = null;

    public int|null $brand_id = null;

    public int|null $parent_id = null;
    
    public string|null $brand_ids = null;

    public string|null $specs = null;

    public string|null $search = null;

    public string|null $lowered = null;

    public string|null $order = null;

    public int|string|null $price_from = null;

    public int|string|null $price_to = null;

    public bool|null $available = null;

    private array $propertiesArray = [
        'category_id' => [],
        'brand_id' => [],
        'parent_id' => [],
        'brand_ids' => [],
        'search' => [],
        'lowered' => [],
        'order' => [],
        'specs' => [],
        'price_from' => [],
        'price_to' => [],
        'available' => [],
    ];
    
    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount(array $filter = [])
    {
        $this->setFilter($filter);
    }

    public function render()
    {
        $products = $this->filterProducts();
        
        return view('livewire.catalog.product-list', compact('products'));
    }

    public function filterProducts()
    {
        return $this->productService->getRepository()
            ->filter($this->filter)
            ->paginate(12);
    }

    public function onOrderSet(string $order)
    {
        $this->order = $order;
        $this->setFilter();
        $this->resetPage();
    }

    protected function queryString()
    {
        return $this->propertiesArray;
    }

    public function setFilter(array $filter = [], $test = false)
    {
        if (!empty($filter)) {
            $this->filter = $filter;
            
            foreach ($this->propertiesArray as $key => $value) {
                $this->{$key} = $this->filter[$key] ?? null;
            }
        } else {
            foreach ($this->propertiesArray as $key => $value) {
                if (isset($this->{$key})) {
                    $this->filter[$key] = $this->{$key};
                }
            }
        }

        $this->dispatch('contentFilterUpdated', $this->filter);
    }

    public function updatingPage($page)
    {
        $this->setFilter();
    }

    public function onFilterUpdated(array $filter)
    {
        $this->setFilter($filter, true);
        // $this->resetPage();
    }
}
