<?php 

return [
    'limit_to_phone' => env('SMS_LIMIT_TO_PHONE', 10),
    'limit_to_ip' => env('SMS_LIMIT_TO_IP', 10),
    'limit_minutes' => env('SMS_LIMIT_MINUTES', 3),
    'otp_verification_limit' => env('OTP_VERIFICATION_LIMIT', 3),
];