<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Services\AuthService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class Login extends Component
{
    public $name;
    public $phone;
    public $email;
    public $last_name;
    public $city;
    public $password;
    public $password_confirmation;
    public $code;
    public $smsSended = false;

    private $authService;

    protected $rules = [
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string|max:20|unique:users,phone',
        'email' => 'required|email|max:255|unique:users,email',
        'city' => 'required|string|max:255',
        'password' => [
            'required',
            'string',
            'min:' . 8,
            'confirmed',
            'max:255',
        ],
    ];

    public function mount()
    {
        $this->smsSended = false;
    }

    public function login(AuthService $authService)
    {
        
    }

    /**
     * 
     * @param AuthService $authService
     */
    public function register(AuthService $authService)
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'city' => $this->city,
            'password' => Hash::make($this->password),
        ];

        $user = $authService->register($data);
        if ($user) {
            $user->roles()->attach(3);
            Auth::login($user);
        }

        return redirect()->route('personal.account', compact('user'));
    }

    public function sendSms(AuthService $authService)
    {
        $phone = preg_replace('/[^\+\d]/', '', $this->phone);
        $email = $this->email;
        $user = User::where('phone', $phone)->exists();
        if ($user) {
            $otp = $authService->smsServiceGenerateRandomCode();
            $message = $authService->getSmsServiceMessage($otp);
            $smsMessage = $authService->setSmsServiceMessage($phone, $message, $otp);
            $response = $authService->smsServiceSend($smsMessage->phone, $smsMessage->text);
            if ($response) {
                $this->smsSended = true;
            };
        };

        $this->dispatch('sms-sent');
    }

    public function render()
    {
        return view('livewire.login', [
            'smsSended' => $this->smsSended
        ]);
    }
}
