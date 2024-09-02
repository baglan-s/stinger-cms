<?php

namespace App\Services;

use \Exception;
use Illuminate\Support\Facades\Log;

class LogService
{
    private string $title;

    private string $channel;

    private string $message;

    private Exception $exception;

    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function setChannel(string $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    public function setException(Exception $exception)
    {
        $this->exception = $exception;
        
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getException(): Exception
    {
        return $this->exception;
    }

    public function setMessageFromException(Exception $exception)
    {
        $this->setException($exception);
        $message = $this->exception->getMessage() . 
            ' File: ' . $this->exception->getFile() . 
            ' Line: ' . $this->exception->getLine();
        $this->setMessage($message);
    }

    public function log(string $title, string $channel, string|Exception $message)
    {
        $this->setTitle($title);
        $this->setChannel($channel);
        $message instanceof Exception ? $this->setMessageFromException($message) : $this->setMessage($message);

        return $this;
    }

    public function write()
    {
        Log::channel($this->getChannel())->info(json_encode([
            'title' => $this->getTitle(),
            'message' => $this->getMessage(),
        ]));
    }
}