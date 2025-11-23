<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        session(['user' => $request->username]);
        return redirect('/')->with('success', 'Logged in!');
    }

    public function register(Request $request)
    {
        return redirect('/login')->with('success', 'Account created!');
    }

    public function signout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}
