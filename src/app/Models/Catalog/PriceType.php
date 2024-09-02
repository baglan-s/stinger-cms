<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PriceType extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];
}
