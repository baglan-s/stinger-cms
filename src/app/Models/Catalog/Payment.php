<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\PaymentType;
use App\Models\Catalog\Order;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
