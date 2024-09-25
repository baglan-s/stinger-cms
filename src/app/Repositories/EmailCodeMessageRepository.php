<?php

namespace App\Repositories;

use App\Models\EmailCodeMessage;
use App\Repositories\Repository;

class EmailCodeMessageRepository extends Repository
{
    protected $model = EmailCodeMessage::class;

    /**
     * 
     * @param string $email
     * @param string $message
     * @param int $code
     */
    public function set($email, $message, $code)
    {
        return $this->model::create([
            'email' => $email,
            'text'  => $message,
            'code'  => $code,
            'ip' => request()->ip()
        ]);
    }
}