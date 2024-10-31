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
            'email'=> ['required','email'],
            'password'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Remplissez le champ email',
            'email.email' => 'Respecter le format mail ex: saklocompany@gmail.com',
            'password.required' => 'Remplissez le champ mot de passe',
        ];
    }
}
