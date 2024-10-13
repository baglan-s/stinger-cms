<?php

namespace App\Models\Catalog;

use App\Models\User;
use App\Models\Catalog\Store;
use App\Models\Traits\HasScopes;
use App\Models\Catalog\OrderItem;
use App\Models\Catalog\OrderStatus;
use App\Models\Catalog\DeliveryAddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Catalog\Payment;

class Order extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddress::class, 'delivery_address_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
