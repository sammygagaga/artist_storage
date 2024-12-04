<?php

namespace App\Http\Requests\User;

use App\Http\Requests\ApiRequest;


class UpdateUserRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required','string','max:100'],
            'email' => ['required','email','unique:users,email'],
        ];
    }
}
