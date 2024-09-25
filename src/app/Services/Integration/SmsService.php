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
    private $SMSC_LOGIN;            // логин клиента
    private $SMSC_PASSWORD;    // пароль
    private const SMSC_POST = 0;                    // использовать метод POST
    private const SMSC_HTTPS = 0;                // использовать HTTPS протокол
    private const SMSC_CHARSET = "windows-1251";    // кодировка сообщения: utf-8, koi8-r или windows-1251 (по умолчанию)
    private const SMSC_DEBUG = 1;                // флаг отладки
    
    /**
     * 
     * @var SmsMessageRepository
     */
    protected $smsMessageRepository;

    private $smsTimerCarbon;

    public function __construct(SmsMessageRepository $smsMessageRepository)
    {
        $this->smsMessageRepository = $smsMessageRepository;
        $this->SMSC_LOGIN = config('sms.auth.login');
        $this->SMSC_PASSWORD = config('sms.auth.password');
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
        $response = Http::get(config('sms.url'), [
            'login' => $this->SMSC_LOGIN,
            'psw' => $this->SMSC_PASSWORD,
            'phones' => $phone,
            'mes' => $message
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

    /**
     * 
     *  Функция отправки SMS
     * обязательные параметры:
     * $phones - список телефонов через запятую или точку с запятой
     * $message - отправляемое сообщение
     * 
     * необязательные параметры:
     * $phones - список телефонов через запятую или точку с запятой
     * $time - необходимое время доставки в виде строки (DDMMYYhhmm, h1-h2, 0ts, +m)
     * $id - идентификатор сообщения. Представляет собой 32-битное число в диапазоне от 1 до 2147483647.
     * $format - формат сообщения (0 - обычное sms, 1 - flash-sms, 2 - wap-push, 3 - hlr, 4 - bin, 5 - bin-hex, 6 - ping-sms, 7 - mms, 8 - mail, 9 - call, 10 - viber, 11 - soc)
     * $sender - имя отправителя (Sender ID).
     * $query - строка дополнительных параметров, добавляемая в URL-запрос ("valid=01:00&maxsms=3&tz=2")
     * $files - массив путей к файлам для отправки mms или e-mail сообщений
     * возвращает массив (<id>, <количество sms>, <стоимость>, <баланс>) в случае успешной отправки
     * либо массив (<id>, -<код ошибки>) в случае ошибки
     */
    function send_sms($phones, $message, $translit = 0, $time = 0, $id = 0, $format = 0, $sender = false, $query = "", $files = array())
    {
        static $formats = array(1 => "flash=1", "push=1", "hlr=1", "bin=1", "bin=2", "ping=1", "mms=1", "mail=1", "call=1", "viber=1", "soc=1");

        $m = self::_smsc_send_cmd("send", "cost=3&phones=".urlencode($phones)."&mes=".urlencode($message).
                        "&translit=$translit&id=$id".($format > 0 ? "&".$formats[$format] : "").
                        ($sender === false ? "" : "&sender=".urlencode($sender)).
                        ($time ? "&time=".urlencode($time) : "").($query ? "&$query" : ""), $files);

        // (id, cnt, cost, balance) или (id, -error)

        if (self::SMSC_DEBUG) {
            if ($m[1] > 0)
                echo "Сообщение отправлено успешно. ID: $m[0], всего SMS: $m[1], стоимость: $m[2], баланс: $m[3].\n";
            else
                echo "Ошибка №", -$m[1], $m[0] ? ", ID: ".$m[0] : "", "\n";
        }

        return $m;
    }

    /**
     * 
     * Функция получения стоимости SMS
     * 
     * обязательные параметры:
     * $phones - список телефонов через запятую или точку с запятой
     * $message - отправляемое сообщение
     * 
     * необязательные параметры:
     * $translit - переводить или нет в транслит (1,2 или 0)
     * $format - формат сообщения (0 - обычное sms, 1 - flash-sms, 2 - wap-push, 3 - hlr, 4 - bin, 5 - bin-hex, 6 - ping-sms, 7 - mms, 8 - mail, 9 - call, 10 - viber, 11 - soc)
     * $sender - имя отправителя (Sender ID)
     * $query - строка дополнительных параметров, добавляемая в URL-запрос ("list=79999999999:Ваш пароль: 123\n78888888888:Ваш пароль: 456")
     * 
     * возвращает массив (<стоимость>, <количество sms>) либо массив (0, -<код ошибки>) в случае ошибки
     */
    public function get_sms_cost($phones, $message, $translit = 0, $format = 0, $sender = false, $query = "")
    {
        static $formats = array(1 => "flash=1", "push=1", "hlr=1", "bin=1", "bin=2", "ping=1", "mms=1", "mail=1", "call=1", "viber=1", "soc=1");

        $m = self::_smsc_send_cmd("send", "cost=1&phones=".urlencode($phones)."&mes=".urlencode($message).
                        ($sender === false ? "" : "&sender=".urlencode($sender)).
                        "&translit=$translit".($format > 0 ? "&".$formats[$format] : "").($query ? "&$query" : ""));

        // (cost, cnt) или (0, -error)

        if (self::SMSC_DEBUG) {
            if ($m[1] > 0)
                echo "Стоимость рассылки: $m[0]. Всего SMS: $m[1]\n";
            else
                echo "Ошибка №", -$m[1], "\n";
        }

        return $m;
    }

    // Функция вызова запроса. Формирует URL и делает 5 попыток чтения через разные подключения к сервису

    public static function _smsc_send_cmd($cmd, $arg = "", $files = array())
    {
        $url = $_url = (self::SMSC_HTTPS ? "https" : "http")."://smsc.kz/sys/$cmd.php?login=".urlencode($this->SMSC_LOGIN)."&psw=".urlencode($this->SMSC_PASSWORD)."&fmt=1&charset=".self::SMSC_CHARSET."&".$arg;

        $i = 0;
        do {
            if ($i++)
                $url = str_replace('://smsc.kz/', '://www'.$i.'.smsc.kz/', $_url);

            $ret = self::_smsc_read_url($url, $files, 3 + $i);
        }
        while ($ret == "" && $i < 5);

        if ($ret == "") {
            if (self::SMSC_DEBUG)
                echo "Ошибка чтения адреса: $url\n";

            $ret = ","; // фиктивный ответ
        }

        $delim = ",";

        if ($cmd == "status") {
            parse_str($arg, $m);

            if (strpos($m["id"], ","))
                $delim = "\n";
        }

        return explode($delim, $ret);
    }

    /**
     * 
     * Функция чтения URL. Для работы должно быть доступно:
     * 
     * curl или fsockopen (только http) или включена опция allow_url_fopen для file_get_contents
     */
    public static function _smsc_read_url($url, $files, $tm = 5)
    {
        $ret = "";
        $post = self::SMSC_POST || strlen($url) > 2000 || $files;

        if (function_exists("curl_init"))
        {
            static $c = 0; // keepalive

            if (!$c) {
                $c = curl_init();
                curl_setopt_array($c, array(
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CONNECTTIMEOUT => $tm,
                        CURLOPT_TIMEOUT => 60,
                        CURLOPT_SSL_VERIFYPEER => 0,
                        CURLOPT_HTTPHEADER => array("Expect:")
                        ));
            }

            curl_setopt($c, CURLOPT_POST, $post);

            if ($post)
            {
                list($url, $post) = explode("?", $url, 2);

                if ($files) {
                    parse_str($post, $m);

                    foreach ($m as $k => $v)
                        $m[$k] = isset($v[0]) && $v[0] == "@" ? sprintf("\0%s", $v) : $v;

                    $post = $m;
                    foreach ($files as $i => $path)
                        if (file_exists($path))
                            $post["file".$i] = function_exists("curl_file_create") ? curl_file_create($path) : "@".$path;
                }

                curl_setopt($c, CURLOPT_POSTFIELDS, $post);
            }

            curl_setopt($c, CURLOPT_URL, $url);

            $ret = curl_exec($c);
        }
        elseif ($files) {
            if (SMSC_DEBUG)
                echo "Не установлен модуль curl для передачи файлов\n";
        }
        else {
            if (!SMSC_HTTPS && function_exists("fsockopen"))
            {
                $m = parse_url($url);

                if (!$fp = fsockopen($m["host"], 80, $errno, $errstr, $tm))
                    $fp = fsockopen("212.24.33.196", 80, $errno, $errstr, $tm);

                if ($fp) {
                    stream_set_timeout($fp, 60);

                    fwrite($fp, ($post ? "POST $m[path]" : "GET $m[path]?$m[query]")." HTTP/1.1\r\nHost: smsc.kz\r\nUser-Agent: PHP".($post ? "\r\nContent-Type: application/x-www-form-urlencoded\r\nContent-Length: ".strlen($m['query']) : "")."\r\nConnection: Close\r\n\r\n".($post ? $m['query'] : ""));

                    while (!feof($fp))
                        $ret .= fgets($fp, 1024);
                    list(, $ret) = explode("\r\n\r\n", $ret, 2);

                    fclose($fp);
                }
            }
            else
                $ret = file_get_contents($url);
        }

        return $ret;
    }

    /**
     * 
     * Функция получения баланса
     * 
     * без параметров
     * возвращает баланс в виде строки или false в случае ошибки
     */
    public function get_balance()
    {
        $m = self::_smsc_send_cmd("balance"); // (balance) или (0, -error)

        if (self::SMSC_DEBUG) {
            if (!isset($m[1]))
                echo "Сумма на счете: ", $m[0], "\n";
            else
                echo "Ошибка №", -$m[1], "\n";
        }

        return isset($m[1]) ? false : $m[0];
    }
}