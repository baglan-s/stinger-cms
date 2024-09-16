<?php

namespace App\Models;

use App\Models\Traits\HasScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory, HasScopes;

    protected $guarded = [];


}
