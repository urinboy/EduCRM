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
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'ip_address' => 'required|string|max:45',
            'device' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'browser' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            'mac_address' => 'required|string|max:255',
            'status' => 'required|string|max:20',
        ];
    }
}
