<?php

namespace App\Models\Catalog;

use App\Models\Catalog\Order;
use App\Models\Catalog\Product;
use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
