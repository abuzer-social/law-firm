<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLogin()
    {

        return view('pages.Auth.login');
    }
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|numeric',
            'otp' => 'required|numeric|digits:6', // example rule for 6-digit OTP
        ]);

        // If validation passes, proceed with your logic (e.g., authentication, redirect)
        // Example placeholder logic
        return redirect()->route('home.index')->with('success', 'Logged in successfully!');
    }

    public function showSignup()
    {
        return view('pages.Auth.signup');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'city'    => 'required|string|max:100',
            'email'   => 'required|email',
            'mobile'  => 'required|numeric',
            'terms'   => 'accepted',
        ]);

        return redirect()->route('home.index')->with('success', 'Signup successful!');
    }
}
