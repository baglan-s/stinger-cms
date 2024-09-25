<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\ProductService;

class Favourites extends Component
{
    private ProductService $productService;

    public $products;

    protected $listeners = [
        'favourites-modal-cleared' => 'onClearFavourites',
        'favourite-modal-removed' => 'onRemoveFavourites',
    ];

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount()
    {
        $this->products = $this->productService->getRepository()->getFavouriteProducts();
    }

    public function render()
    {
        return view('livewire.catalog.favourites');
    }

    public function onClearFavourites()
    {
        $this->products = $this->productService->getRepository()->getFavouriteProducts();
    }

    public function onRemoveFavourites(int $productId)
    {
        $this->products = $this->productService->getRepository()->getFavouriteProducts();
    }

    public function clearFavourites()
    {
        $this->productService->getRepository()->clearFavouriteProductIds();
        $this->products = $this->productService->getRepository()->getFavouriteProducts();
        $this->dispatch('favourites-cleared');
    }
}
