<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function showTranslation()
    {
        return view('pages.translation.translation');
    }
} 