<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\SmsMessage;

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
}