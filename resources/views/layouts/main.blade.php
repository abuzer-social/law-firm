<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel RTL App') }}</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logo.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @if(app()->getLocale() === 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @endif
    @stack('styles')
</head>
<body class="d-flex flex-column overflow-x-hidden @yield('body-class')">
@include('partials.navbar')

<main class="flex-grow-1">
    @yield('content')
</main>

@if (!Route::is('login') && !Route::is('login.page') && !Route::is('signup.page'))
    @include('partials.footer')
@endif
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
<script src="{{asset('assets/js/countryDialer.js')}}"></script>
<script src="{{asset('assets/js/counter.js')}}"></script>
<script src="{{asset('assets/js/customDropdown.js')}}"></script>
<script src="{{asset('assets/js/fileUploader.js')}}"></script>
<script src="{{asset('assets/js/btnLoader.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
@stack('scripts')
</body>
</html>
