<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.homepage.index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
        ]);

        return back()->with('success', __('home.Form submitted successfully!'));
    }

    public function setLocale(string $locale)
    {
        $availableLocales = config('app.available_locales', ['en', 'ar']);

        if (in_array($locale, $availableLocales)) {
            session(['locale' => $locale]);
            App::setLocale($locale);
        }

        return redirect()->back();
    }
}
