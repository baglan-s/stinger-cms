<?php

namespace App\Repositories;

use App\Models\Language;
use App\Repositories\RepositoryInterface;

class LanguageRepository implements RepositoryInterface
{
    public function model()
    {
        return new Language;
    }

    public function all()
    {
        return $this->model()->all();
    }

    public function active()
    {
        return $this->model()
            ->where('active', true)
            ->get();
    }

    public function find($id)
    {
        return $this->model()->find($id);
    }

    public function create()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {

    }
}