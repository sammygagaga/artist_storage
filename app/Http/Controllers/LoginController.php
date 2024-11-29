<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]))
        {
            return response()->json([
                'message'=> 'invalid credentials'
            ],401);
        }

        $user = Auth::guard('web')->user();
        $token = $user->createToken('login');



        $user->update(['api_token'=>$token]);

        return [
            'token' => $token->plainTextToken,
        ];
    }
}
