<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(Request $request) {
        if ( Auth::attempt($request->only('email','password'))) {
            $user = Auth::user();
            $token = $user->createToken('admin')->accessToken;
            return ['token' => $token];
        }

        return response([
            'error' => 'Неверный логин или пароль'
        ], Response::HTTP_UNAUTHORIZED);
    }

    public function register(RegisterRequest $request) {
        $user = User::create(
            [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'),), // поставим всегда пароль по умолчанию

        ]);
        return response($user, Response::HTTP_CREATED);

    }
}
