<?php

namespace App\Models\Catalog;

use App\Models\User;
use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryAddress extends Model
{
    use HasFactory, SoftDeletes, HasScopes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullAddress()
    {
        return "{$this->city}, {$this->street}, {$this->building}, {$this->appartment}";
    }
}
