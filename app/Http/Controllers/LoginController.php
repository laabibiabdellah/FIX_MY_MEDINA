<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function handle(Request $request)
    {
        $creadentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $success = Auth::attempt($creadentials, true);
        if ($success) {
            $request->session()->regenerate();
            if (Auth::user()->user_type == 'admin') {
                return to_route('dashboard.index')->with('success', 'Login successfully');
            } else {
                return to_route('home')->with('success', 'Login successfully');
            }
        } else {
            return to_route('login')->with('error', 'Invalid Email or Password');
        }

        if (Auth::check()) {
            $request->session()->regenerate();
            if (Auth::user()->user_type == 'admin') {;
                return to_route('dashboard.index')->with('success', 'Login successfully');
            } else {
                return to_route('home')->with('success', 'Login successfully');
            }
        } else {
            return to_route('login')->with('error', 'Invalid Email or Password');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login')->with('success', 'Logout successfully');
    }
}
