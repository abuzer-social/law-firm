<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('pages.contact.contact');
    }
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Process the contact data (e.g., store or send email)...

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
