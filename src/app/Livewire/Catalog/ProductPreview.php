<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Models\Catalog\Product;
use App\Services\ProductService;
use Illuminate\Support\Facades\Cookie;

class ProductPreview extends Component
{
    public Product $product;

    public array $class;

    public string $favouriteClass;

    public string $comparisonClass;

    public array $favouriteProductIds;

    public array $comparisonProductIds;

    private ProductService $productService;

    public $listeners = [
        'favourites-modal-cleared' => 'onModalCleared',
        'comparison-modal-cleared' => 'onModalComparisonCleared',
        'favourite-modal-removed' => 'onFavouriteModalRemoved',
    ];

    public function __construct()
    {
        $this->productService = app(ProductService::class);
    }

    public function mount(Product $product, array $class = [])
    {
        $product->cityStocks = $product->stocks->filter(function ($stock) {
            return $stock->store?->city_id == Cookie::get('city_id', 1) || $stock->store?->is_distributor;
        });

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

    public function addToComparison()
    {
        $this->productService->getRepository()->addComparisonProductId($this->product->id);
        $this->comparisonProductIds = $this->productService->getRepository()->getComparisonProductIds();
        $this->setComparisonClass();
        $this->dispatch('comparison-added', $this->product);
    }

    public function removeFromFavourites()
    {
        $this->productService->getRepository()->removeFavouriteProductId($this->product->id);
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setFavouriteClass();
        $this->dispatch('favourite-removed', $this->product);
    }

    public function onFavouriteModalRemoved(int $productId)
    {
        if ($productId === $this->product->id) {
            $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
            $this->setFavouriteClass();
        }
    }

    public function removeFromComparison()
    {
        $this->productService->getRepository()->removeComparisonProductId($this->product->id);
        $this->comparisonProductIds = $this->productService->getRepository()->getComparisonProductIds();
        $this->setComparisonClass();
        $this->dispatch('comparison-removed', $this->product);
    }

    public function toggleFavourite()
    {
        $this->isFavourite() ? $this->removeFromFavourites() : $this->addToFavourites();
    }

    public function toggleComparison()
    {
        $this->isComparison() ? $this->removeFromComparison() : $this->addToComparison();
    }

    public function isFavourite()
    {
        return in_array($this->product->id, $this->favouriteProductIds);
    }

    public function isComparison()
    {
        return in_array($this->product->id, $this->comparisonProductIds);
    }

    public function setFavouriteClass()
    {
        $this->favouriteClass = $this->isFavourite() ? 'favourite' : '';
    }

    public function setComparisonClass()
    {
        $this->comparisonClass = $this->isComparison() ? 'comparison' : '';
    }

    public function onModalCleared()
    {
        $this->favouriteProductIds = $this->productService->getRepository()->getFavouriteProductIds();
        $this->setFavouriteClass();
    }

    public function onModalComparisonCleared()
    {
        $this->comparisonProductIds = $this->productService->getRepository()->getComparisonProductIds();
        $this->setComparisonClass();
    }

    public function addProductToCart(int $productId)
    {
        $this->dispatch('productAddToCart', $productId);
    }
}
