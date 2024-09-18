<?php

namespace App\Services\Integration;

use Carbon\Carbon;
use App\Services\Service;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
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

    private $smsTimerCarbon;

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
        // $data = [
        //     'login' => 'nemokz',
        //     'psw' => 'xQQCPnkJrGfyYExA',
        //     'phones' => '+777777777',
        //     'mes' => 'Hello world'
        // ];
        // $response = Http::withBody(json_encode($data), 'application/json')
        //                   ->acceptJson()
        //                   ->post('https://smsc.kz/rest/send/'); 

        $response = Http::get('https://smsc.kz/sys/send.php', [
            'login' => "nemokz",
            'psw' => "xQQCPnkJrGfyYExA",
            'phones' => '+777777777',
            'mes' => 'Hello world',
            'cost' => 1
        ]);

        return $response;

    }

    /**
     * 
     * @param mixed $phone 
     * @return JsonResponse|bool
     */
    public function checkSendLimit($phone)
    {
        $response = [
            'isLimit' => false,
            'message' => '',
            'status' => 423
        ];

        $timestampString = Cache::get('smsTimerCarbon');
        $timestamp = intval($timestampString);
        $this->smsTimerCarbon = Carbon::createFromTimestamp($timestamp);
        $spamPhone = Cache::get('spam_phone') ?? false;
        if ($this->smsTimerCarbon && $spamPhone == $phone) {
            $response['isLimit'] = true;
            $response = $this->checkTimer($this->smsTimerCarbon); 
        } else {
            $spamCheckRes = $this->spamCheck($phone);
            if (!$spamCheckRes) {
                $response = $this->checkTimer($this->smsTimerCarbon);
            };
        }
        
        return $response;
    }

    /**
     * 
     * @param mixed $timer 
     * @return array
     */
    protected function checkTimer($timer)
    {
        $response['isLimit'] = false;
        $isPast = true;
        $currentDate = Carbon::now();
        $dateParse = Carbon::parse($timer);
        $isPast = Carbon::parse($timer)->isPast();
        if (!$isPast) {
            $response['isLimit'] = true;
            if ($dateParse->diffInSeconds($currentDate,'absolute') > 120) {
                $response['message'] = __('site.sms.limit_24');
            } else {
                $response['message'] = __('site.sms.limit_seconds', ['sec' => $dateParse->diffInSeconds($currentDate,'absolute')]);
            }
            $response['status'] = 423;
            return $response;
        };

        return $response;
    }

    /**
     * 
     * @param mixed $phone 
     * @return bool
     */
    protected function spamCheck($phone = null)
    {   
        if ($phone) {
            $smsMessagesToPhoneTodayCount = $this->smsMessageRepository->getSmsMessagesToPhoneTodayCount($phone, Carbon::today());
            if ($smsMessagesToPhoneTodayCount > config('sms.limit_to_phone')) {
                Cache::put('smsTimerCarbon', now()->add(1, 'day')->timestamp);
                Cache::put('spam_phone', $phone);
                return false;
            }
        }

        $smsMessagesTodayCount = $this->smsMessageRepository->getSmsMessagesTodayCount(Carbon::today());

        if ($smsMessagesTodayCount > config('sms.limit_to_ip')) {
            Cache::put('smsTimerCarbon', now()->add(1, 'day')->timestamp);
            Cache::put('spam_phone', $phone);
            return false;
        }

        $smsMessagesCount = $this->smsMessageRepository->getSmsMessagesCount(Carbon::now());

        if ($smsMessagesCount > config('sms.limit_minutes')) {
            Cache::put('smsTimerCarbon', now()->addMinutes(1)->timestamp);
            return false;
        }
        Cache::forget('smsTimerCarbon', 'spam_phone');

        return true;
    }
}