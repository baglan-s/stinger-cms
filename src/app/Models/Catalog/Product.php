<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\ProductTranslation;
use App\Models\Catalog\ProductImage;
use App\Models\Catalog\Brand;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\ProductStock;
use App\Models\Catalog\ProductPrice;
use App\Models\Catalog\Specification;

class Product extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

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
}
