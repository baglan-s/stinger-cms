<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Catalog\Store;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository
{
    protected $model = User::class;

    /**
     * 
     * @param array $data
     * @return User $user
     */
    public function create(array $data): User
    {
        return $this->model::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'city' => $data['city'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function get($userId, $fields = ['*'])
    {
        return $this->model::select($fields)
            ->where('active', 1)
            ->find($userId);
    }
}