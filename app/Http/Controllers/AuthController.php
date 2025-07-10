<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
            'city' => 'required|string|max:100',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'terms' => 'accepted',
        ]);

        return redirect()->route('home.index')->with('success', 'Signup successful!');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:9'
        ]);

        $otp = rand(1000, 9999);

        // Log the OTP for testing (check storage/logs/laravel.log)
        Log::info("Generated OTP for {$request->phone}: $otp");

        session([
            'otp' => Hash::make($otp), // Still store hashed OTP for security
            'otp_phone' => $request->phone,
            'otp_expires_at' => now()->addMinutes(5)
        ]);

        return response()->json(['success' => true]);
    }

    /** Verify OTP **/
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|digits:9',
            'otp' => 'required|digits:4'
        ]);

        // Check if OTP exists and is not expired
        if (
            session('otp') &&
            session('otp_phone') === $request->phone &&
            session('otp_expires_at') > now() &&
            Hash::check($request->otp, session('otp'))
        ) {
            // OTP is correct - clear session
            $request->session()->forget(['otp', 'otp_phone', 'otp_expires_at']);

            // In a real app, you might log the user in here
            return response()->json(['success' => true]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid or expired OTP'
        ], 422);
    }
}
