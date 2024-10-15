<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\ProductService;

class SearchModal extends Component
{
    public $search = '';

    public $products;

    private ProductService $productService;

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount()
    {
        $this->search = request('search', '');
        $this->products = collect([]);
    }

    public function render()
    {
        return view('livewire.catalog.search-modal');
    }

    public function updatedSearch()
    {
        if (trim($this->search) === '') {
            return false;
        }

        $this->products = $this->productService->getRepository()
            ->filter(['search' => trim($this->search)])
            ->limit(3)
            ->get();
    }
}
