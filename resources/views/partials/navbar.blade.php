<nav class="navbar navbar-expand-lg">
    <div class="container-md">
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#navbarOffcanvas">
            <img src="{{ asset('assets/images/toggle-icon.svg') }}" alt="">
        </button>
        <a class="navbar-brand m-0" href="#">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="">
        </a>

        <!-- OFFCANVAS START -->
        <div class="offcanvas {{app()->getLocale() == 'ar' ? 'offcanvas-end' : 'offcanvas-start' }}  lf-offcanvas"
             tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <img src="{{asset("assets/images/white-logo.svg")}}" alt="">
                <button type="button" class="btn-close " data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}"
                           href="home">{{ __('navbar.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                           href="about">{{ __('navbar.about_us') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-select {{ request()->is('business') || request()->is('document') || request()->is('lawyer') || request()->is('translation') || request()->is('accounting') ? 'active' : '' }}"
                           href="#" role="button" data-bs-toggle="dropdown">
                            {{ __('navbar.our_services') }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->is('business') ? 'active' : '' }}"
                                   href="business">{{ __('navbar.more_options.option_1') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('document') ? 'active' : '' }}"
                                   href="document">{{ __('navbar.more_options.option_3') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('lawyer') ? 'active' : '' }}"
                                   href="lawyer">{{ __('navbar.more_options.option_4') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('accounting') ? 'active' : '' }}"
                                   href="accounting">{{ __('navbar.services.service_1') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('translation') ? 'active' : '' }}"
                                   href="translation">{{ __('navbar.services.service_2') }}</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-select {{ request()->is('contact')  || request()->is('privacy-policy') || request()->is('terms-and-condition') || request()->is('faq') ? 'active' : '' }}"
                           href="#" role="button" data-bs-toggle="dropdown">
                            {{ __('navbar.more') }}
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->is('contact') ? 'active' : '' }}"
                                   href="contact">{{ __('navbar.more_options.option_2') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('privacy-policy') ? 'active' : '' }}"
                                   href="privacy-policy">{{ __('navbar.more_options.option_5') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('terms-and-condition') ? 'active' : '' }}"
                                   href="terms-and-condition">{{ __('navbar.more_options.option_6') }}</a></li>
                            <li><a class="dropdown-item {{ request()->is('faq') ? 'active' : '' }}"
                                   href="faq">{{ __('navbar.more_options.option_7') }}</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-flex align-items-center flex-column flex-lg-row gap-3 mt-4 mt-lg-0">
                    <div class="mob-btn-full">
                        <a href="{{ route('login.page') }}" class="btn btn-primary login-btn-mob w-100">Login</a>
                    </div>
                    <div class="dropdown lang-drop-container">
                        <div class="language-dropdown dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>{{ __('navbar.current_language.' . app()->getLocale()) }}</span>
                        </div>
                        <ul class="dropdown-menu custom-center-dropdown">
                            <li>
                                <a class="dropdown-item mb-1 {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                                   href="{{ route('set.locale', 'en') }}">
                                    {{ __('navbar.language.english') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() == 'ar' ? 'active' : '' }}"
                                   href="{{ route('set.locale', 'ar') }}">
                                    {{ __('navbar.language.arabic') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown d-none d-lg-flex lang-drop-container">
                        <a href="#" class="user-icon dropdown-toggle no-caret" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img src="{{ asset('assets/images/nav-person-icon.svg') }}" alt="User Icon">
                        </a>
                        <ul class="dropdown-menu custom-center-dropdown">
                            <li>
                                <a class="dropdown-item mb-1 {{ request()->is('login') ? 'active' : '' }}"
                                   href="{{ route('login.page') }}">
                                    {{ __('navbar.auth.login') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('signup') ? 'active' : '' }}"
                                   href="{{ route('signup.page') }}">
                                    {{ __('navbar.auth.register') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- OFFCANVAS END -->

    </div>
</nav>
