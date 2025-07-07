<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function showTermsAndCondition()
    {
        return view('pages.terms-and-condition.index');
    }
} 