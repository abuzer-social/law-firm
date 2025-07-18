@extends('layouts.main')

@section('content')
    <div class="accounting-container">
        <header class="accounting-header margin-top" @if(app()->isLocale('ar')) dir="rtl" @endif>
            <div class="padding-top">
                <div class="text-center header-top">
                    <h2 class="primary pb-3 lf-heading">{{ __('accounting.header.title') }}</h2>
                    <h5 class="fw-semibold">{{ __('accounting.header.subtitle') }}</h5>
                </div>
                <div class="container">
                    <div class="row g-4 align-items-center py-5">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div @if(app()->isLocale('ar')) style="text-align: right;" @endif>
                                <h5 class="header-desc d-text-gray pb-4 text-justify">
                                    {{ __('accounting.header.description') }}
                                </h5>
                                <div class="" @if(app()->isLocale('ar')) style="text-align: right;" @endif>
                                    <button class="btn btn-primary btn-lg px-4 rounded-4 fw-semibold">
                                        {{ __('accounting.header.button') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div>
                                <img class="img-fluid rounded-5"
                                     src="{{ asset('assets/images/accounting-header.png') }}"
                                     alt="{{ __('accounting.header.title') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="business-plan-section acounting-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
            <div class="text-center">
                <h1 class="primary pb-3 lf-subheading">
                    {{ __('accounting.packages.title') }}
                </h1>
                <h6>
                    {{ __('accounting.packages.subtitle') }}
                </h6>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12 text-center">
                        <ul class="nav nav-pills mb-3 subscription-toggle" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home"
                                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    {{ __('accounting.packages.subscription.annual') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile"
                                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    {{ __('accounting.packages.subscription.monthly') }}
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab"
                         tabindex="0">
                        <div class="row g-3">
                            <!-- Launch Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="plan-card essential-plan accounting-pkg-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag essential">{{ __('accounting.packages.plans.launch.name') }}</div>
                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                            <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                            <h2 class="navy fw-bold">
                                                {{ __('accounting.packages.plans.launch.price') }}
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.2') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.3') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.4') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.5') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.6') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.7') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.8') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="essential-bottom">
                                        <div class="essential-additional">
                                            <h5 class="fw-semibold pb-3">{{ __('accounting.packages.plans.launch.additional.title') }}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.additional.services.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.additional.services.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.additional.services.2') }}</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn w-100 rounded-3">{{ __('accounting.packages.subscribe') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Growth Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="plan-card pro-plan accounting-pkg-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag pro">{{ __('accounting.packages.plans.growth.name') }}</div>
                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                            <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                            <h2 class="navy fw-bold">
                                                {{ __('accounting.packages.plans.growth.price') }}
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.2') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.3') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.4') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.5') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable pro-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.6') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable pro-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.7') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable pro-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.8') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-bottom">
                                        <div class="growth-additional">
                                            <h5 class="fw-semibold pb-3">{{ __('accounting.packages.plans.growth.additional.title') }}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.additional.services.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.additional.services.1') }}</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn w-100 rounded-3">{{ __('accounting.packages.subscribe') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Premier Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="plan-card flexible-plan accounting-pkg-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag flexible">{{ __('accounting.packages.plans.premier.name') }}</div>
                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                            <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                            <h2 class="navy fw-bold">
                                                {{ __('accounting.packages.plans.premier.price') }}
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.2') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.3') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.4') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.5') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.6') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.7') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.8') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flexible-bottom">
                                        <div class="premier-additional">
                                            <h5 class="fw-semibold pb-3">{{ __('accounting.packages.plans.premier.additional.title') }}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.additional.services.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.additional.services.1') }}</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn w-100 rounded-3">{{ __('accounting.packages.subscribe') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                         tabindex="0">
                        <div class="row g-3">
                            <!-- Launch Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="plan-card essential-plan accounting-pkg-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag essential">{{ __('accounting.packages.plans.launch.name') }}</div>
                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                            <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                            <h2 class="navy fw-bold">
                                                {{ __('accounting.packages.plans.launch.price') }}
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.2') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.3') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.4') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.5') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.6') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.7') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable essential-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.features.8') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="essential-bottom">
                                        <div class="essential-additional">
                                            <h5 class="fw-semibold pb-3">{{ __('accounting.packages.plans.launch.additional.title') }}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.additional.services.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.additional.services.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable essential-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.launch.additional.services.2') }}</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn w-100 rounded-3">{{ __('accounting.packages.subscribe') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Growth Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="plan-card pro-plan accounting-pkg-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag pro">{{ __('accounting.packages.plans.growth.name') }}</div>
                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                            <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                            <h2 class="navy fw-bold">
                                                {{ __('accounting.packages.plans.growth.price') }}
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.2') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.3') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.4') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.5') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable pro-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.6') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable pro-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.7') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-disable pro-counter"><img src="{{asset('assets/images/white-cross.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.features.8') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-bottom">
                                        <div class="growth-additional">
                                            <h5 class="fw-semibold pb-3">{{ __('accounting.packages.plans.growth.additional.title') }}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.additional.services.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable pro-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.growth.additional.services.1') }}</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn w-100 rounded-3">{{ __('accounting.packages.subscribe') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Premier Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="plan-card flexible-plan accounting-pkg-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag flexible">{{ __('accounting.packages.plans.premier.name') }}</div>
                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                            <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                            <h2 class="navy fw-bold">
                                                {{ __('accounting.packages.plans.premier.price') }}
                                            </h2>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.1') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.2') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.3') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.4') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.5') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.6') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.7') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.features.8') }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flexible-bottom">
                                        <div class="premier-additional">
                                            <h5 class="fw-semibold pb-3">{{ __('accounting.packages.plans.premier.additional.title') }}</h5>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.additional.services.0') }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div class="plan-enable premier-counter"><img src="{{asset('assets/images/white-tick.svg')}}" alt=""></div>
                                                <h5>{{ __('accounting.packages.plans.premier.additional.services.1') }}</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn w-100 rounded-3">{{ __('accounting.packages.subscribe') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
