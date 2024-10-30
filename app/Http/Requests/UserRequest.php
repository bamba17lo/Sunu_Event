<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name'=> ['required'],
            'last_name'=> ['required'],
            'phone'=> ['required','unique:users,phone'],
            'email'=>['required','unique:users,email','email'],
            'password'=> ['required','between:7,10','confirmed'],
            'password_confirmation'=> ['required']

        ];
    }

    public function messages()
    {
        return [
            'first_name.required'=> "Remplissez le champ prénom",
            'last_name.required'=> "Remplissez le champ nom",
            'phone.required'=> "Remplissez le champ téléphone",
            'email.required'=> "Remplissez le champ email",
            'password.required'=> "Remplissez le champ mot de passe",
            'password_confirmation.required'=> "Confirmer votre mot de passe",

            'phone.unique'=> "Ce numéro existe déja",
            'email.unique'=> "Cet email existe déja",
            'email.email'=> "Respecter le format mail ex: saklocompany@gmail.com",
            'password.between' => "la longueur du mot de passe doit être entre 7 et 10 caractère",
            'password.confirmed'=> "les mots de passe ne correspondent pas"
        ];
    }


}
