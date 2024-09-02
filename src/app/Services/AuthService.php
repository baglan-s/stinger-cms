<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\UserRepository;
use App\Services\Integration\SmsService;

class AuthService extends Service
{
    
    /**
     * 
     * UserRepository
     */
    private $userRepository;
    private $smsService;

    public function __construct(UserRepository $userRepo, SmsService $smsService)
    {
        $this->userRepository = $userRepo;
        $this->smsService = $smsService;
    }

    /**
     * 
     * @param array $data
     */
    public function register(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function randomCode()
    {
        return $this->smsService->generateRandomCode();
    }
}