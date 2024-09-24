<?php

namespace App\Models\Catalog;

use App\Models\Catalog\Brand;
use App\Models\Traits\HasScopes;
use App\Models\Catalog\ProductImage;
use App\Models\Catalog\ProductPrice;
use App\Models\Catalog\ProductStock;
use App\Models\Catalog\ProductFile;
use App\Models\Catalog\Specification;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\City;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\ProductTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cookie;

class Product extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations', 'images'];

    protected $translationClass = ProductTranslation::class;

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }

    public function cityStocks()
    {
        return $this->hasMany(ProductStock::class)
            ->whereHas('store', function ($query) {
                $query->where('city_id', Cookie::get('city_id'))
                    ->orWhere('city_id', 7);
            });
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function children()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    public function specifications()
    {
        return $this->belongsToMany(
            Specification::class, 
            'product_specifications',
            'product_id',
            'specification_id'
        );
    }

    public function files()
    {
        return $this->hasMany(ProductFile::class);
    }

    public function hasImages()
    {
        return $this->images->count() > 0;
    }

    public function getFirstImage()
    {
        return 'storage/' . $this->images->first();
    }

    public function getDefaultImage()
    {
        return $this->hasImages() ? $this->getFirstImage() : 'assets/images/default-product.png';
    }

    public function getArticle()
    {
        return $this->article && $this->article != '' ? $this->article : '-';
    }

    public function getPrice()
    {
        $cityPrice = $this->prices->where('price_type_id', Cookie::get('price_type_id', 3))->first();

        if (!$cityPrice) {
            return $this->prices->first()?->price ?? 0;
        }

        return $cityPrice->price;
    }

    public function getOldPrice()
    {
        $rrcPrice = $this->prices->where('price_type_id', config('price_types.rrc', 4))->first();
        $cityPrice = $this->prices->where('price_type_id', Cookie::get('price_type_id', 3))->first();

        if (!$rrcPrice || !$cityPrice || $rrcPrice->price === $cityPrice->price) {
            return 0;
        }

        return $rrcPrice->price;
    }

    public function getDiscount()
    {
        $price = $this->getPrice();
        $oldPrice = $this->getOldPrice();

        if ($oldPrice <= 0 || $price <= 0) {
            return 0;
        }

        return round(($oldPrice - $price) / $oldPrice * 100, 2);
    }

    public function incrementView()
    {
        $this->views++;
        $this->save();
    }

    public function stocksGroupedByCity()
    {
        $stocks = [];

        foreach ($this->stocks as $stock) {
            if ($stock->store->city_id) {
                $stocks[$stock->store?->city?->translation()?->name ?? $stock->store?->city?->id][] = $stock;
            }
        }

        return $stocks;
    }
}
