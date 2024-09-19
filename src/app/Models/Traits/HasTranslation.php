<?php

namespace App\Models\Traits;

use App\Models\Setting;

trait HasTranslation
{
    public function translations()
    {
        return $this->hasMany($this->translationClass, $this->translationKey ?? $this->getForeignKey());
    }

    public function translation()
    {
        return $this->translations()->whereHas('language', function ($q) {
            $q->where('code', app()->getLocale());
        })->first();
    }
}