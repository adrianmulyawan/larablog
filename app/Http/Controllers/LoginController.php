<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $loginData = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($loginData)) {
            return redirect()->route('dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
