<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout()
    {
        return view('pages.about.about');
    }
} 