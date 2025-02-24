<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required','email'],
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'The email is required to log in.',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'Please provide a password.',
            'password.min' => 'Password must be at least 6 characters long.',
        ];
    }
}
