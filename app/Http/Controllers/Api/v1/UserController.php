<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\User\MinifiedPublishedUserResource;
use App\Http\Resources\User\MinifiedUserResource;
use App\Models\User;
use App\Facades\User as UserFacade;
use App\Services\UserService;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('update', 'destroy');

        $this->middleware('user.accessor')->only('update', 'destroy');
    }

    public function show(User $user)
    {
        return new MinifiedUserResource($user);
    }

    public function store(CreateUserRequest $request,User $user)
    {
        UserFacade::setUser($user)->store($request->validated());

        return responseCreated();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return responseDestroy();
    }

    public function update(UpdateUserRequest $request,User $user)
    {
        UserFacade::setUser($user)->update($request);

        return new MinifiedPublishedUserResource($user);
    }
}
