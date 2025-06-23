<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('pages.Auth.login');
    }

    public function showSignup()
    {
        return view('pages.Auth.signup');
    }
} 