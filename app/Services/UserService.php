<?php

namespace App\Services;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;


class UserService
{
    private User $user;

    public function store(array $data):User
    {
      return $user = $this->user::query()->create([
            'name' => Arr::get($data, 'name'),
            'email' => Arr::get($data, 'email'),
            'is_admin' => Arr::get($data, 'is_admin'),
            'password'=>Hash::make(Arr::get($data, 'password.value')),
        ]);

    }

    public function setUser(User $user): UserService
    {
        $this->user = $user;
        return $this;
    }
}
