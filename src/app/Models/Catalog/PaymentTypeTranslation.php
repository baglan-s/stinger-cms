<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class PaymentTypeTranslation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
