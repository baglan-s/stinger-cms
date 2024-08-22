<?php

namespace App\Http\Requests\Catalog;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryAddressUpdateRequest extends FormRequest
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
            'street' => ['required', 'string'],
            'city' => ['required', 'string'],
            'building' => ['required', 'string'],
            'apartment' => ['string'],
            'country' => ['string'],
            'state' => ['string'],
            'zip_code' => ['string'],
        ];
    }
}
