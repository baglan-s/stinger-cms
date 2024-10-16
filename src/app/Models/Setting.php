<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\Product;
use App\Models\Language;
use App\Models\SearchHint;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function weeklyProduct()
    {
        return $this->belongsTo(Product::class, 'weekly_product_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getSetting()
    {
        return self::first();
    }

    public function searchHints()
    {
        return $this->hasMany(SearchHint::class);
    }
}
