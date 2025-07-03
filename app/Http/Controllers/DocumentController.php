<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return view('pages.document.index');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'description' => 'required|string|max:1000',
        ]);

        // Process logic (e.g., save to DB, send email, etc.)
        return back()->with('success', 'Form submitted successfully.');
    }
}
