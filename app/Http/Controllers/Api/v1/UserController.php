<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Http\Resources\User\MinifiedUserResource;
use App\Models\User;
use App\Services\UserService;


class UserController extends Controller
{
    public function show(User $user)
    {



        return new MinifiedUserResource($user);
    }

    public function store(UserRequest $request, UserService $service, User $user)
    {
        $service->setUser($user)->store($request->validated());

        return responseCreated();
    }
}
