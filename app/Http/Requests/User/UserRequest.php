<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:100'],
            'email' => ['required','email','unique:users,email'],
            'is_admin'=> ['required','boolean'],
            'password' => ['required_array_keys:value,confirmation'],
            'password.value'=>['required','min:6','max:100'],
            'password.confirmation' => ['same:password.value'],
        ];
    }
}
