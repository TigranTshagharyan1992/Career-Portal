<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Show the login form
     */
    public function show()
    {
        return view('auth.login'); // make sure this view exists
    }

    /**
     * Handle login form submission
     */
    public function login(LoginRequest $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()
            ->withErrors(['username' => 'Invalid username or password.'])
            ->withInput($request->only('username'));
    }

    /**
     * Logout the user
     */
    public function logout(Request $request)
    {
        Auth::logout(); // log out

        $request->session()->invalidate(); // invalidate the session
        $request->session()->regenerateToken(); // regenerate CSRF token

        return redirect('/'); // redirect to homepage or login page
    }
}
