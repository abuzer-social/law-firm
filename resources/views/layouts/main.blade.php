<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel RTL App') }}</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logo.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @if(app()->getLocale() === 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @endif
</head>
<body class="d-flex flex-column @yield('body-class')">
@include('partials.navbar')

<main class="flex-grow-1">
    @yield('content')
</main>

@if (!Route::is('login'))
    @include('partials.footer')
@endif
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "gb",
        separateDialCode: true,
        loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
    });
</script>
<script>
    class Counter {
        constructor() {
            this.count = 0;
            this.decrementBtn = document.getElementById('decrementBtn');
            this.incrementBtn = document.getElementById('incrementBtn');
            this.display = document.getElementById('counterDisplay');

            this.init();
        }

        init() {
            this.decrementBtn.addEventListener('click', () => this.decrement());
            this.incrementBtn.addEventListener('click', () => this.increment());
            this.updateDisplay();
        }

        decrement() {
            this.count--;
            this.updateDisplay();
        }

        increment() {
            this.count++;
            this.updateDisplay();
        }

        updateDisplay() {
            this.display.textContent = this.count;
        }
    }

    // Initialize counter when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new Counter();
    });
</script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
