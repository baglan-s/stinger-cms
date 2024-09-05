<?php

namespace App\Services\Integration;

use App\Services\Service;
use App\Repositories\SmsMessageRepository;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;
use Illuminate\Contracts\Container\BindingResolutionException;

class SmsService extends Service
{
    /**
     * 
     * @var SmsMessageRepository
     */
    protected $smsMessageRepository;

    public function __construct(SmsMessageRepository $smsMessageRepository)
    {;
        $this->smsMessageRepository = $smsMessageRepository;
    }

    /**
     * 
     * @return string|int 
     * @throws BindingResolutionException 
     * @throws NotFoundExceptionInterface 
     * @throws ContainerExceptionInterface 
     */
    public function generateRandomCode()
    {
        return rand(1000, 9999);
    }

    /**
     * 
     * @param string|int $code 
     * @return string 
     */
    public function getMessage($code)
    {
        return "Код {$code}. Конфиденциально. Для входа в nemo.com";
    }

    /**
     * 
     * @param string $phone 
     * @param string $message 
     * @param mixed $code 
     * @return mixed 
     */
    public function setSmsMessage($phone, $message, $code = NULL)
    {
        $data = [
            'phone' => $phone,
            'text' => $message,
            'code' => $code
        ];

        return $this->smsMessageRepository->set($data);
    }

    /**
     * 
     * @param string $phone
     * @param string $message
     */
    public function send($phone, $message)
    {
        // inshaAllah, the logic for sending SMS will appear soon;
        return time();

    }
}