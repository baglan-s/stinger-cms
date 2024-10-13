<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasScopes;
use App\Models\Traits\HasTranslation;
use App\Models\Catalog\Payment;
use App\Models\Catalog\PaymentTypeTranslation;

class PaymentType extends Model
{
    use HasFactory, HasScopes, HasTranslation;
    
    protected $with = ['translations'];

    protected $guarded = [];

    protected $translationClass = PaymentTypeTranslation::class;

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
