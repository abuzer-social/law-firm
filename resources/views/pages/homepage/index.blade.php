@extends('layouts.main')

@section('content')
    <div class="container-fluid home-header-container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 order-2 order-lg-1 home-img-section p-0">
                <div class="d-flex justify-content-center mb-3">
                    <img class=" max-100 d-block d-lg-none" src="{{asset('assets/images/horizontal-divider.svg')}}" alt="">
                </div>
                <div class="d-block d-lg-flex justify-content-between align-items-end gap-3">
                    <div class="home-pattern-img">
                        <img class="max-100 " src="{{asset('assets/images/homepage-pattern.svg')}}" alt="">
                    </div>
                    <div>
                        <img class="fit-content d-none d-lg-block" src="{{asset('assets/images/divider.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 order-1 order-lg-2 px-4 px-lg-5">
                <div>
                    <h1 class="pb-4 saudi">
                        {{ __('home.header.title') }}
                    </h1>
                    <h4 class="primary fw-semibold pb-3 ">
                        {{ __('home.header.subtitle') }}
                    </h4>
                    <p class="fw-semibold home-header-desc text-justify">
                        {{ __('home.header.description') }}
                    </p>
                    <div class="mt-3 d-flex justify-content-center justify-content-lg-start">
                        <button class="btn btn-primary btn-lg fw-bold d-flex align-items-center gap-3 rounded-4 px-4">
                            {{ __('home.header.button') }}
                            <img class="home-header-btn-icon" src="{{asset('assets/images/arrow-right.svg')}}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-services-section">
        <div class="text-center pb-5 ">
            <h1 class="saudi">
                {{ __('home.services.title') }}
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    @if(app()->getLocale() === 'ar')
                        <div class="text-center"><img src="{{asset('assets/images/service-card-ar-1.svg')}}" alt="">
                        </div>
                    @else
                        <div class="text-center"><img src="{{asset('assets/images/service-card-1.svg')}}" alt=""></div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    @if(app()->getLocale() === 'ar')
                        <div class="text-center"><img src="{{asset('assets/images/service-card-ar-2.svg')}}" alt="">
                        </div>
                    @else
                        <div class="text-center"><img src="{{asset('assets/images/service-card-2.svg')}}" alt=""></div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    @if(app()->getLocale() === 'ar')
                        <div class="text-center"><img src="{{asset('assets/images/service-card-ar-3.svg')}}" alt="">
                        </div>
                    @else
                        <div class="text-center"><img src="{{asset('assets/images/service-card-3.svg')}}" alt=""></div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-12">
                    @if(app()->getLocale() === 'ar')
                        <div class="text-center"><img src="{{asset('assets/images/service-card-ar-4.svg')}}" alt="">
                        </div>
                    @else
                        <div class="text-center"><img src="{{asset('assets/images/service-card-4.svg')}}" alt=""></div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col d-none d-lg-block"></div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <div class="text-center"><img src="{{asset('assets/images/service-card-ar-5.svg')}}" alt="">
                            </div>
                        @else
                            <div class="text-center"><img src="{{asset('assets/images/service-card-5.svg')}}" alt="">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <div class="text-center"><img src="{{asset('assets/images/service-card-ar-6.svg')}}" alt="">
                            </div>
                        @else
                            <div class="text-center"><img src="{{asset('assets/images/service-card-6.svg')}}" alt="">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="col-lg-3">
                        @if(app()->getLocale() === 'ar')
                            <div class="text-center"><img src="{{asset('assets/images/service-card-ar-7.svg')}}" alt="">
                            </div>
                        @else
                            <div class="text-center"><img src="{{asset('assets/images/service-card-7.svg')}}" alt="">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    <section class="detail-section-container">
        <div class="pb-5 text-center">
            <h1 class="saudi">
                {!! __('home.details.title') !!}
            </h1>
        </div>
        <div class="container">
            <div class="row g-4 position-relative">
                <!-- Card 1 -->
                <div class="col-lg-4">
                    <div class="card detail-card">
                        <div class="card-body text-center">
                            <div class="pb-3">
                                <img src="{{asset('assets/images/detail-icon-1.svg')}}" alt="">
                            </div>
                            <h5 class="fw-semibold pb-3" style="color: #80C343">
                                {{ __('home.details.card1.title') }}
                            </h5>
                            <p>
                                {{ __('home.details.card1.description') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4">
                    <div class="card detail-card">
                        <div class="card-body text-center">
                            <div class="pb-3">
                                <img src="{{asset('assets/images/detail-icon-2.svg')}}" alt="">
                            </div>
                            <h5 class="fw-semibold pb-3" style="color: #6CA6D1">
                                {{ __('home.details.card2.title') }}
                            </h5>
                            <p>
                                {{ __('home.details.card2.description') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4">
                    <div class="card detail-card">
                        <div class="card-body text-center">
                            <div class="pb-3">
                                <img src="{{asset('assets/images/detail-icon-3.svg')}}" alt="">
                            </div>
                            <h5 class="fw-semibold pb-3" style="color: #37A592">
                                {{ __('home.details.card3.title') }}
                            </h5>
                            <p>
                                {{ __('home.details.card3.description') }}
                            </p>
                        </div>
                    </div>
                </div>

                <img class="detail-upper-pattern" src="{{asset('assets/images/dotted-pattern.png')}}" alt="">
            </div>
        </div>
        <img class="detail-lower-pattern" src="{{asset('assets/images/dotted-pattern.png')}}" alt="">
    </section>
    <section class="solution-sections py-5">
        <div class="text-center mb-4">
            <h1 class="saudi primary">{{ __('home.solutions.title') }}</h1>
        </div>
        <div class="container">
            <div class="row justify-content-between g-3">
                <!-- Contracts Card -->
                <div class="flex-grow-1 col-lg-2 col-md-6">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container contracts">
                                <img src="{{asset('assets/images/solution-icon-4.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">{{ __('home.solutions.cards.contracts.title') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accounting Card -->
                <div class="flex-grow-1 col-lg-2 col-md-6">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container accounting">
                                <img src="{{asset('assets/images/solution-icon-3.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">{{ __('home.solutions.cards.accounting.title') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Translation Card -->
                <div class=" flex-grow-1 col-lg-2 col-md-6">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container language">
                                <img src="{{asset('assets/images/solution-icon-2.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">{{ __('home.solutions.cards.translation.title') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lawyer Card -->
                <div class="flex-grow-1 col-lg-2 col-md-6">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container lawyer">
                                <img src="{{asset('assets/images/solution-icon-1.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">{{ __('home.solutions.cards.lawyer.title') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plans Card -->
                <div class="flex-grow-1 col-lg-2 col-md-6">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container legal">
                                <img src="{{asset('assets/images/solution-icon-5.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">{{ __('home.solutions.cards.plans.title') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-section">
        <div class="text-center pb-5" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
            <h2 class="saudi pb-2">
                {!! __('home.registration_section.title') !!}
            </h2>
            <h6>
                {{ __('home.registration_section.subtitle') }}
            </h6>
        </div>
        <div class="process-img py-4 d-none d-md-block">
            @if(app()->getLocale() === 'ar')
                <img class="img-fluid" src="{{ asset('assets/images/processor-ar.svg') }}" alt="{{ __('home.registration_section.title') }}">
            @else
                <img class="img-fluid" src="{{ asset('assets/images/processor.svg') }}" alt="{{ __('home.registration_section.title') }}">
            @endif
        </div>
        <div class="text-center py-4 d-block d-md-none">
            @if(app()->getLocale() === 'ar')
                <img class="img-fluid" src="{{ asset('assets/images/processor-ar-mobile.svg') }}" alt="{{ __('home.registration_section.title') }}">
            @else
                <img class="img-fluid" src="{{ asset('assets/images/processor-mobile.svg') }}" alt="{{ __('home.registration_section.title') }}">
            @endif
        </div>
        <div class="mt-5 text-center">
            <button class="btn btn-primary btn-lg fw-semibold">
                {{ __('home.registration_section.button') }}
            </button>
        </div>
    </section>
    <section class="container registering-section">
        <div class="text-white">
            <h2 class="fw-bold pb-3">
                {{ __('home.registration_cta.title') }}
            </h2>
            <h5 class="fw-bold">
                {{ __('home.registration_cta.subtitle') }}
            </h5>
        </div>
    </section>
@endsection
