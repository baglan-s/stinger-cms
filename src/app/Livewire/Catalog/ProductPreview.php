<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Models\Catalog\Product;
use App\Services\ProductService;

class ProductPreview extends Component
{
    public Product $product;

    public array $class;

    public string $favouriteClass;

    public array $favouriteProductIds;

    private ProductService $productService;

    public $listeners = ['favourites-modal-cleared' => 'onModalCleared'];

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount(Product $product, array $class = [])
    {
        $this->product = $product;
        $this->class = $class;
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setFavouriteClass();
    }

    public function render()
    {
        return view('livewire.catalog.product-preview');
    }

    public function addToFavourites()
    {
        $this->productService->getRepository()->addFavouriteProductId($this->product->id);
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setFavouriteClass();
        $this->dispatch('favourite-added', $this->product);
    }

    public function removeFromFavourites()
    {
        $this->productService->getRepository()->removeFavouriteProductId($this->product->id);
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setFavouriteClass();
        $this->dispatch('favourite-removed', $this->product);
    }

    public function toggleFavourite()
    {
        $this->isFavourite() ? $this->removeFromFavourites() : $this->addToFavourites();
    }

    public function isFavourite()
    {
        return in_array($this->product->id, $this->favouriteProductIds);
    }

    public function setFavouriteClass()
    {
        $this->favouriteClass = $this->isFavourite() ? 'favourite' : '';
    }

    public function onModalCleared()
    {
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setFavouriteClass();
    }
}
