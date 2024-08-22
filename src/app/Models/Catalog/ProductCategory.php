<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\ProductCategoryTranslation;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\Specification;

class ProductCategory extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = ProductCategoryTranslation::class;

    protected $translationKey = 'product_category_id';

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    public function specifications()
    {
        return $this->belongsToMany(
            Specification::class, 
            'product_category_specifications',
            'product_category_id',
            'specification_id'
        );
    }
}
