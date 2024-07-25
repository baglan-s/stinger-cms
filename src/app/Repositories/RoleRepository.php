<?php

namespace App\Repositories;

use App\Models\Role;
use App\Repositories\RepositoryInterface;

class RoleRepository implements RepositoryInterface
{
    public function model()
    {
        return new Role;
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