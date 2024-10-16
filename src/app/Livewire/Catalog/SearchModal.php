<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\SearchHint;

class SearchModal extends Component
{
    public $search = '';

    public $products;

    public $searchHints;

    private ProductService $productService;

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount()
    {
        $this->search = request('search', '');
        $this->products = collect([]);
        $this->searchHints = collect([]);
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

        $searchWord = trim($this->search);

        $this->searchHints = SearchHint::whereRaw(
            "lower(search_word) LIKE '%" . mb_strtolower($searchWord) . "%'"
        )->get();

        if ($this->searchHints->count() > 0) {
            $searchWord = $this->searchHints->first()?->search_hint;
        }

        $this->products = $this->productService->getRepository()
            ->filter(['search' => $searchWord])
            ->limit(3)
            ->get();
    }
}
