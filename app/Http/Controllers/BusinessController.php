<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        return view('pages.business.index');
    }
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'city' => 'required|string',
            'entity_type' => 'required|string',
        ]);

        // Proceed with logic...

        return back()->with('success', 'Form submitted successfully!');
    }
}
