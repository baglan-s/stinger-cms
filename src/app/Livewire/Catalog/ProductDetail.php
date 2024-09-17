<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Models\Catalog\Product;
use App\Services\ProductService;

class ProductDetail extends Component
{
    public Product $product;

    private ProductService $productService;

    public array $favouriteProductIds;

    public bool $isFavourite;

    public $listeners = ['favourites-modal-cleared' => 'onModalCleared'];

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setIsFavourite();
    }

    public function render()
    {
        return view('livewire.catalog.product-detail');
    }

    public function addToFavourites()
    {
        $this->productService->getRepository()->addFavouriteProductId($this->product->id);
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setIsFavourite();
        $this->dispatch('favourite-added', $this->product);
    }

    public function removeFromFavourites()
    {
        $this->productService->getRepository()->removeFavouriteProductId($this->product->id);
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setIsFavourite();
        $this->dispatch('favourite-removed', $this->product);
    }

    public function toggleFavourite()
    {
        $this->isFavourite ? $this->removeFromFavourites() : $this->addToFavourites();
    }

    public function setIsFavourite()
    {
        $this->isFavourite = in_array($this->product->id, $this->favouriteProductIds);
    }

    public function onModalCleared()
    {
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setIsFavourite();
    }
}