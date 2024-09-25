<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\ProductFileTranslation;
use App\Models\Catalog\Product;

class ProductFile extends Model
{
    use HasFactory, HasTranslation;

    protected $guarded = [];

    protected $with = ['translations'];

    protected $translationClass = ProductFileTranslation::class;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
