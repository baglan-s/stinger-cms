<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'phone' => ['required','string','max:20','unique:users,phone,'.$this->user_id],
            'birthdate' => ['string','max:255'],
            'birthdate_parts' => ['array','max:255'],
            'email' => ['email','max:255','unique:users,email,'.$this->user_id],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Имя обязательно для заполнения.',
            'name.string' => 'Имя должно быть текстовым.',
            'name.max' => 'Имя не может быть длиннее 255 символов.',
            'last_name.required' => 'Фамилия обязательна для заполнения.',
            'last_name.string' => 'Фамилия должна быть текстовой.',
            'last_name.max' => 'Фамилия не может быть длиннее 255 символов.',
            'phone.required' => 'Номер телефона обязателен для заполнения.',
            'phone.string' => 'Номер телефона должен быть текстовым.',
            'phone.max' => 'Номер телефон не может быть длиннее 20 символов.',
            'phone.unique' => 'Этот номер телефон уже зарегистрирован.',
            'birthdate.string' => 'Дата рождения должна быть текстовой.',
            'email.unique' => 'Этот email телефон уже зарегистрирован.',
            'email.email' => 'Некорректный Email'
        ];
    }
}
