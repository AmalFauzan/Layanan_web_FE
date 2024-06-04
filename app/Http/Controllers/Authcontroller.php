<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Simulasi autentikasi
        if ($credentials['email'] == 'user@example.com' && $credentials['password'] == 'password') {
            Session::put('authenticated', true);
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau Password Salah.',
        ]);
    }

    public function logout()
    {
        Session::forget('authenticated');
        return redirect('login');
    }
}