<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class FeedbackForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string|min:10',
    ];

    public function submitForm()
    {
        // Валидация данных
        $validatedData = $this->validate();

        Mail::raw($this->message, function ($mail) use ($validatedData) {
            $mail->to('support@example.com')
                 ->from($validatedData['email'], $validatedData['name'])
                 ->subject('Обратная связь');
        });

        $this->resetForm();
        session()->flash('message', 'Сообщение успешно отправлено!');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
