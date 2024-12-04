<?php

namespace App\Http\Requests\User;

use App\Http\Requests\ApiRequest;


class CreateUserRequest extends ApiRequest
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
