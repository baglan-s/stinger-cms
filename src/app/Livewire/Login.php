<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $name;
    public $phone;
    public $email;
    public $last_name;
    public $city;
    public $password;
    public $password_confirmation;

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

    public function login()
    {
        dd(123);
    }

    public function register()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'last_name' => $this->surname,
            'phone' => $this->phone,
            'email' => $this->email,
            'city' => $this->city,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
