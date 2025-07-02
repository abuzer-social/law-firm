@extends('layouts.main')

@section('content')
    <header class="signup-header">
        <h1 class="fw-bold text-white saudi">{{ __('auth.signup.title') }}</h1>
    </header>
    <div class="container">
        <div class="row g-3 signup-wrapper">
            <div class="col-lg-4">
                <div class="card signup-card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h3 class="primary fw-semibold">{{ __('auth.signup.welcome.title') }}</h3>
                            <p class="fw-semibold">{{ __('auth.signup.welcome.subtitle') }}</p>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="list-circle">
                                    <img src="{{asset('assets/images/white-tick.svg')}}" alt="">
                                </div>
                                <p>{{ __('auth.signup.welcome.points.account_type') }}</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="list-circle">
                                    <img src="{{asset('assets/images/white-tick.svg')}}" alt="">
                                </div>
                                <p>{{ __('auth.signup.welcome.points.help') }}</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="list-circle">
                                    <img src="{{asset('assets/images/white-tick.svg')}}" alt="">
                                </div>
                                <p>{{ __('auth.signup.welcome.points.review') }}</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="list-circle">
                                    <img src="{{asset('assets/images/white-tick.svg')}}" alt="">
                                </div>
                                <p>{!! __('auth.signup.welcome.points.terms') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card signup-card">
                    <div class="card-body">
                        <ul class="nav custom-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="individual-tab" data-bs-toggle="tab"
                                        data-bs-target="#individual" type="button" role="tab">
                                    {{ __('auth.signup.entity_type.individual') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="government-tab" data-bs-toggle="tab"
                                        data-bs-target="#government" type="button" role="tab">
                                    {{ __('auth.signup.entity_type.government') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="entity-tab" data-bs-toggle="tab" data-bs-target="#entity"
                                        type="button" role="tab">
                                    {{ __('auth.signup.entity_type.entity') }}
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="individual" role="tabpanel">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for=""
                                                       class="form-label fw-semibold">{{ __('auth.signup.form.name_arabic') }}</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for=""
                                                       class="form-label fw-semibold">{{ __('auth.signup.form.name_english') }}</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for=""
                                                       class="form-label fw-semibold">{{ __('auth.signup.form.city') }}</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for=""
                                                       class="form-label fw-semibold">{{ __('auth.signup.form.email') }}</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for=""
                                                       class="form-label fw-semibold">{{ __('auth.signup.form.mobile') }}</label>
                                                <div class="">
                                                    <input type="number" id="phone" class="form-control"
                                                           name="name"
                                                           placeholder="{{ __('auth.signup.form.mobile') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            {{ __('auth.signup.form.terms_acceptance') }}
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('home.index')}}" type="submit"
                                           class="btn btn-primary px-5 rounded-3">{{ __('auth.signup.form.submit') }}</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="government" role="tabpanel">Government Content</div>
                            <div class="tab-pane fade" id="entity" role="tabpanel">Entity Content</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <p>{{ __('auth.signup.already_account') }} <a class="primary text-decoration-none"
                                                                  href="{{ route('login.page') }}">{{ __('auth.signup.login_link') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
