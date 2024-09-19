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

    protected $listeners = ['orderSet' => 'onOrderSet'];

    private ProductService $productService;

    public array $filter = [];

    public int|null $category_id = null;

    public int|null $brand_id = null;

    public int|null $parent_id = null;
    
    public array|null $brand_ids = null;

    public string|null $search = null;

    public string|null $lowered = null;

    public string|null $order = null;

    private array $propertiesArray = [
        'category_id' => [],
        'brand_id' => [],
        'parent_id' => [],
        'brand_ids' => [],
        'search' => [],
        'lowered' => [],
        'order' => [],
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

    public function setFilter(array $filter = [])
    {
        if (!empty($filter)) {
            $this->filter = $filter;
            
            foreach ($filter as $key => $value) {
                $this->{$key} = $value;
            }
        } else {
            foreach ($this->propertiesArray as $key => $value) {
                if (isset($this->{$key})) {
                    $this->filter[$key] = $this->{$key};
                }
            }
        }
    }

    public function updatingPage($page)
    {
        $this->setFilter();
    }
}
