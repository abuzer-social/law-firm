<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function showAccounting()
    {
        return view('pages.accounting.accounting');
    }
} 