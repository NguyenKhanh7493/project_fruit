<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Invalid email address.',
            'password.required' => 'Please enter your password.',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            // Login successful
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Incorrect email or password.']);
    }
}
