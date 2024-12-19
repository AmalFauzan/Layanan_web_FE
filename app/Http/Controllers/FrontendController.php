<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Assuming your login form view is named 'login.blade.php'
    }

    public function showDashboard()
    {
        return view('dashboard'); // Assuming your dashboard view is named 'dashboard.blade.php'
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return redirect()->route('login'); // Redirect to the login page
    }
}
