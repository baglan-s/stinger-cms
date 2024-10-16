<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\SearchHint;

class MobileSearchModal extends Component
{
    protected $listeners = [
        'searchUpdated' => 'onSearchUpdated',
    ];

    public $searchHints;

    public $products;

    private ProductService $productService;

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount()
    {
        $this->products = collect([]);
        $this->searchHints = collect([]);
    }

    public function render()
    {
        return view('livewire.mobile-search-modal');
    }

    public function onSearchUpdated($search)
    {
        $this->searchHints = SearchHint::whereRaw(
            "lower(search_word) LIKE '%" . mb_strtolower($search) . "%'"
        )->get();

        if ($this->searchHints->count() > 0) {
            $search = $this->searchHints->first()?->search_hint;
        }

        $this->products = $this->productService->getRepository()
            ->filter(['search' => $search])
            ->limit(3)
            ->get();
    }
}
