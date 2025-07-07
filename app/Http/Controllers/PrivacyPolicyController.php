<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function showPrivacyPolicy()
    {
        return view('pages.privacy-policy.index');
    }
} 