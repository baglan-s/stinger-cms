<?php

namespace App\Repositories;

use App\Models\Language;
use App\Repositories\Repository;

class LanguageRepository extends Repository
{
    protected $model = Language::class;

    public function getByCode($code)
    {
        return $this->model()->where('code', $code)->first();
    }
}