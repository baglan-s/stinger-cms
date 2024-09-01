<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\UserRepository;

class AuthService extends Service
{
    
    /**
     * 
     * UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * 
     * @param array $data
     */
    public function register(array $data)
    {
        return $this->userRepository->create($data);
    }
}