<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home">{{ __('navbar.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('navbar.about_us') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-select" href="#" role="button" data-bs-toggle="dropdown">
                        {{ __('navbar.our_services') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">{{ __('navbar.services.service_1') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('navbar.services.service_2') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-select" href="#" role="button" data-bs-toggle="dropdown">
                        {{ __('navbar.more') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="business">{{ __('navbar.more_options.option_1') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('navbar.more_options.option_2') }}</a></li>
                    </ul>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <div class="dropdown">
                    <div class="language-dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>{{ __('navbar.current_language.' . app()->getLocale()) }}</span>
                        <img src="{{ asset('assets/images/' . app()->getLocale() . '-icon.svg') }}"
                             alt="{{ __('navbar.language.' . app()->getLocale() . '_flag') }}">
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('set.locale', 'en') }}">
                                <img src="{{ asset('assets/images/en-icon.svg') }}" width="20">
                                {{ __('navbar.language.english') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() == 'ar' ? 'active' : '' }}" href="{{ route('set.locale', 'ar') }}">
                                <img src="{{ asset('assets/images/ar-icon.svg') }}" width="20">
                                {{ __('navbar.language.arabic') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="user-icon">
                    <img src="{{ asset('assets/images/nav-person-icon.svg') }}">
                </div>
            </div>
        </div>
    </div>
</nav>
