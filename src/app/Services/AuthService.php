<?php

namespace App\Services;

use App\Models\User;
use App\Services\Service;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use App\Services\Integration\SmsService;

class AuthService extends Service
{
    
    /**
     * 
     * UserRepository
     */
    public $userRepository;
    public $smsService;

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

    public function smsServiceGenerateRandomCode()
    {
        return $this->smsService->generateRandomCode();
    }

    /**
     * 
     * @param string|int $code 
     * @return string 
     */
    public function getSmsServiceMessage($code)
    {
        return $this->smsService->getMessage($code);
    }

    /**
     * 
     * @param string $phone 
     * @param string $message 
     * @param int $code 
     * @return mixed 
     */
    public function setSmsServiceMessage($phone, $message, $code)
    {
        return $this->smsService->setSmsMessage($phone, $message, $code);
    }

    public function smsServiceSend($phone, $message)
    {
        return $this->smsService->send($phone, $message);
    }

    /**
     * @param int $userId
     */
    public function loginByUserId($userId): void
    {
        Auth::loginUsingId($userId);
    }

    public function check(): bool
    {
        return Auth::check();
    }

    /**
     * 
     * @return User|null|false
     */
    public function user()
    {
        return Auth::user();
    }

    public function logout(): void
    {
        Auth::logout(); 
    }
}