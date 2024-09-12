<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasScopes;
use App\Models\Catalog\Specification;
use App\Models\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\ProductCategoryTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory, HasTranslation, HasScopes;

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

    public function getImage()
    {
        return $this->image ? 'storage/' . $this->image : 'assets/images/default-image.png';
    }
}
