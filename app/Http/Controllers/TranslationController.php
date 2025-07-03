<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function showTranslation()
    {
        return view('pages.translation.translation');
    }
    public function submitTranslation(Request $request)
    {
        $request->validate([
            'file_name' => 'required|string|max:255',
            'translate_from' => 'required|string',
            'translate_to' => 'required|string',
            'translation_quality' => 'required|string',
            'specialization' => 'required|string',
            'file_upload' => 'required|file|mimes:pdf,doc,docx,txt|max:5120', // 5MB
            'notes' => 'nullable|string',
        ]);

        // Process the data here...

        return back()->with('success', 'Translation request submitted!');
    }
}
