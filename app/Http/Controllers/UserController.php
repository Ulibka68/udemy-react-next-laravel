<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        return User::with('role')->paginate();
    }

    public function show($id)
    {
        return User::with('role')->find($id);
    }

//    UserCreateRequest - описывает правила валидации
    public function store(UserCreateRequest $request)
    {

        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'role_id' => $request->input('role_id'),
            'password' => Hash::make('1234'), // поставим всегда пароль по умолчанию

        ]);
        return response($user, Response::HTTP_CREATED);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->only('first_name', 'last_name', 'email','role_id'));
        return response($user, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        $user = User::destroy($id);
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function user() {
        return Auth::user();
    }

    public function updateInfo(Request $request) {
        $user = Auth::user();
        $user->update($request->only('first_name', 'last_name', 'email'));
        return response($user, Response::HTTP_ACCEPTED);
    }

    public function updatePassword(UpdatePasswordRequest $request) {
        $user = Auth::user();
        $user->update(['password' => Hash::make($request->input('password'))]);
        return response($user, Response::HTTP_ACCEPTED);
    }
}
