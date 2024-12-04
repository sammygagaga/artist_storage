<?php

namespace App\Services;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
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

    public function update(UpdateUserRequest $request): User
    {
        $data = [];
        if($request->has('name')){
            $data['name']=$request->input('name') ;
        }
        if($request->has('email')){
            $data['email']=$request->input('email') ;
        }
        $this->user->update($data);

        return $this->user;
    }

    public function setUser(User $user): UserService
    {
        $this->user = $user;
        return $this;
    }
}
