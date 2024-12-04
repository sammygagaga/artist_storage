<?php

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Services\UserService setUser(\App\Models\User $user): UserService
 * @method static \App\Models\User[] store(array $user):User
 * @method static \App\Models\User update(\App\Http\Requests\User\UpdateUserRequest $request):User
 * @see \App\Services\UserService
 */
class User extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'user';
    }
}
