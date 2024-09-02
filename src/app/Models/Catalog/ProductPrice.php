<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasScopes;
use App\Models\Catalog\PriceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductPrice extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(PriceType::class);
    }
}
