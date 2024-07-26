<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'photo' => 'nullable|image|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'bio' => 'nullable|string|max:3000',
            'phone' => 'nullable|string|max:20',
            'organization_id' => 'nullable|exists:organizations,id',
            'address_id' => 'nullable|exists:addresses,id',
            'language_id' => 'nullable|exists:languages,id',
            'currency_id' => 'nullable|exists:currencies,id',
            'status' => 'required|in:active,inactive,unallowed,blocked',
        ];
    }
}
