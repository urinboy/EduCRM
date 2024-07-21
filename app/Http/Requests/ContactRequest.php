<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }
}
