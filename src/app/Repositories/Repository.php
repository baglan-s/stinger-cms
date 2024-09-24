<?php

namespace App\Repositories;

use \Exception;

class Repository
{
    protected $model;

    public function model()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model()->all();
    }

    public function find(string $id)
    {
        return $this->model()->find($id);
    }

    public function create(array $data)
    {
        return $this->model()->create($data);
    }

    public function update(string $id, array $data)
    {
        if (!$model = $this->model()->find($id)) {
            throw new Exception('Record not found!');
        }

        $model->update($data);
    }

    public function delete(string $id)
    {
        if (!$model = $this->model()->find($id)) {
            throw new Exception('Record not found!');
        }

        $model->delete();
    }

    public function scopeWith(array $with)
    {
        return $this->model()->with($with);
    }

    public function findBySlug(string $slug)
    {
        return $this->model()->whereHas('translations', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->first();
    }
}