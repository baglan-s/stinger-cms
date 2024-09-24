<?php

namespace App\Models\Traits;

trait HasScopes
{
    public function scopeActive()
    {
        return $this->where('active', true);
    }
}