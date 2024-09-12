<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasTranslation;
use App\Models\Traits\HasScopes;

class SmsMessage extends Model
{
    use HasFactory, HasTranslation, HasScopes;

    protected $fillable = [
        'phone',
        'code',
        'text',
        'ip'
    ];
}
