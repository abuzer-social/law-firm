<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        return view('pages.lawyer.index');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'lawsuit' => 'required|string',
            'consultation_type' => 'required|string',
            'details' => 'required|string|max:1000',
            'attachments' => 'required|file|mimes:pdf,doc,docx,png,jpg|max:2048',
        ]);

        // Process logic...

        return back()->with('success', 'Form submitted successfully.');
    }
}
