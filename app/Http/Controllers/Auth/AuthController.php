<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($credentials, $remember_me)) {
            redirect()->route('admin.dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function register()
    {

        return view('auth.login');
    }

    public function postRegister(UserRequest $request)
    {
    }
}
