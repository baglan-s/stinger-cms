<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();
    public function find(string $id);
    public function create();
    public function update();
    public function delete();
}