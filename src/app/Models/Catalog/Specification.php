<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasScopes;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\SpecificationValue;
use App\Models\Catalog\SpecificationTranslation;
use App\Models\Catalog\ProductSpecificationValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specification extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = SpecificationTranslation::class;

    public function values()
    {
        return $this->hasMany(SpecificationValue::class);
    }

    public function categories()
    {
        return $this->belongsToMany(
            ProductCategory::class, 
            'product_category_specifications',
            'specification_id',
            'product_category_id'
        );
    }

    public function products()
    {
        return $this->belongsToMany(
            Product::class, 
            'product_specifications',
            'specification_id',
            'product_id'
        );
    }

    public function productValues()
    {
        return $this->belongsToMany(
            SpecificationValue::class, 
            'product_specification_values',
            'specification_id',
            'specification_value_id'
        );
    }
}
