<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Models\Catalog\City;
use App\Models\Catalog\Store;
use App\Models\Catalog\Product;
use App\Services\ProductService;
use App\Services\SettingService;
use App\Repositories\CityRepository;
use Illuminate\Support\Facades\Cookie;

class ProductDetail extends Component
{
    public Product $product;

    private ProductService $productService;

    public array $favouriteProductIds;

    public bool $isFavourite;

    private const KASPI_MERCHANT_CODE = 'Nemo';
    private const CITY_ALMATY_GUID = '1c8049e8-ad06-11ed-ab65-00155d3c3e3b';

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
        $currentCity = app(CityRepository::class)->getActive()->find(Cookie::get('city_id', 1));
        self::kaspiBtnRender();
        return view('livewire.catalog.product-detail', [
            'setting' => app(SettingService::class)->getSetting(),
            'currentCity' => $currentCity,
            'kaspiMerchantCode' => self::KASPI_MERCHANT_CODE
        ]);
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

    public function addToCart(int $productId)
    {
        $this->dispatch('productAddToCart', $productId);
    }

    private function kaspiWidgetRender()
    {
        $isKaspiWidget = false;
        if (self::checkStocks()) {
            $isKaspiWidget = true;
        }
        
        return $isKaspiWidget;
    }

    /**
     * 
     * @return bool
     */
    private function checkStocks(): bool
    {
        $almatyCity = app(CityRepository::class)->getActive()->where('guid', self::CITY_ALMATY_GUID)->first();
        $almatyStoreIds = Store::where('city_id', $almatyCity->id)->pluck('id')->toArray();
        if ($this->product->cityStocks->sum('available') > 0) {
            return true;
        }
        if ($this->product->stocks->whereIn('store_id', $almatyStoreIds)->sum('available') > 0) {
            return true;
        }

        return false;
    }
}
