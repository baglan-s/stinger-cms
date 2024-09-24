<?php

namespace App\Models\Catalog;

use App\Models\Catalog\Store;
use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreImage extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
