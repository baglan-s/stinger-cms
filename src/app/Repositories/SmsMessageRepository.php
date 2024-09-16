<?php

namespace App\Repositories;

use App\Models\SmsMessage;
use App\Repositories\Repository;
use Carbon\Exceptions\InvalidFormatException;

class SmsMessageRepository extends Repository
{
    /**
     * 
     * @param array $data 
     * @return mixed 
     * @throws BindingResolutionException 
     * @throws ConflictingHeadersException 
     */
    public function set($data)
    {
        return SmsMessage::create([
            'phone' => $data['phone'],
            'text'  => $data['text'],
            'code'  => $data['code'],
            'ip' => request()->ip()
        ]);
    }

    /**
     * 
     * @param mixed $phone 
     * @param Carbon $date
     * @return mixed 
     * @throws InvalidFormatException 
     */
    public function getSmsMessagesToPhoneTodayCount($phone, $date)
    {
        return SmsMessage::where('phone', $phone)->whereDate('created_at', $date)->count();
    }

    /**
     * 
     * @param Carbon $date
     * @return mixed 
     */
    public function getSmsMessagesTodayCount($data)
    {
        return SmsMessage::where('ip', request()->ip())->whereDate('created_at', $data)->count();
    }

    /**
     * 
     * @param Carbon $date
     * @return mixed
     */
    public function getSmsMessagesCount($data)
    {
        return SmsMessage::where('ip', request()->ip())
            ->whereBetween('created_at', [
                $data->subMinutes(2), 
                $data
                ])
            ->count();
    }
}