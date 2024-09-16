<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\ProductService;

class FavouriteModal extends Component
{
    private ProductService $productService;

    public bool $hasFavourite = false;

    public int $favouriteProductsCount = 0;

    public $products;

    protected $listeners = [
        'favourite-added' => 'onFavouritesAdded', 
        'favourite-removed' => 'onFavouritesRemoved',
        'favourites-cleared' => 'setProductsData',
    ];

    public function mount()
    {
        $this->setProductsData();
    }

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function render()
    {
        return view('livewire.favourite-modal');
    }

    public function setFavouriteProductsCount()
    {
        $this->favouriteProductsCount = $this->productService->getRepository()->favouriteProductsCount();
    }

    public function setHasFavouriteProducts()
    {
        $this->hasFavourite = $this->productService->getRepository()->hasFavouriteProducts();
    }

    public function setFavouriteProducts()
    {
        $this->products = $this->productService->getRepository()->getFavouriteProducts(3);
    }

    public function setProductsData()
    {
        $this->setHasFavouriteProducts();
        $this->setFavouriteProductsCount();
        $this->setFavouriteProducts();
    }

    public function onFavouritesAdded()
    {
        $this->setProductsData();
    }

    public function onFavouritesRemoved()
    {
        $this->setProductsData();
    }

    public function clearFavourites()
    {
        $this->productService->getRepository()->clearFavouriteProductIds();
        $this->setProductsData();
        $this->dispatch('favourites-modal-cleared');
    }

    public function toFavourites()
    {
        return redirect('favourites');
    }
}
