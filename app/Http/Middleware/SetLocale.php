<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $availableLocales = ['en', 'ar'];
        $locale = session('locale', config('app.locale', 'en'));

        if (in_array($locale, $availableLocales)) {
            App::setLocale($locale);
        } else {
            App::setLocale('en');
            session(['locale' => 'en']);
        }

        return $next($request);
    }
}
