@extends('layouts.main')

@section('content')
    <header class="lawyer-header" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div>
            <div class="text-center header-top">
                <h2 class="primary pb-3 fw-bold">{{ __('document.header.title') }}</h2>
                <h5 class="max-50 m-auto">{{ __('document.header.subtitle') }}</h5>
            </div>
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-6">
                        <div @if(app()->isLocale('ar')) style="text-align: right;" @endif>
                            <h2 class="pb-3 fw-bold">
                                {{ __('document.header.service_title') }}
                            </h2>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('document.header.points.choose_package') }}
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('document.header.points.submit_inquiry') }}
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('document.header.points.receive_answers') }}
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('document.header.points.solve_problem') }}
                                    </h5>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary btn-lg px-4 py-2 rounded-4 fw-semibold fs-18">
                                    {{ __('document.header.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img class="w-100 rounded-5" src="{{ asset('assets/images/lawyer-header.png') }}"
                                 alt="{{ __('document.header.title') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="business-plan-section lawyer-plan-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="text-center mb-5">
            <h1 class="primary pb-3 fw-bold">
                {{ __('document.packages.title') }}
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <!-- Essential Plan -->
                <div class="col-lg-4">
                    <div class="plan-card essential-plan">
                        <div class="flex-grow-1">
                            <div class="plan-tag essential">{{ __('document.packages.plans.essential.name') }}</div>
                            <div class="py-4 d-flex align-items-center gap-3 justify-content-center">
                                <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                <h2 class="navy fw-bold">
                                    {{ __('document.packages.plans.essential.price') }}
                                </h2>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="plan-counter essential-counter">2</div>
                                <h6>
                                    {{ __('document.packages.plans.essential.consultations') }}
                                </h6>
                            </div>
                            <p class="fw-bold py-3 dark-gray">يشمل</p>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable essential-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.essential.feature1') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable essential-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.essential.feature2') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable essential-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.essential.feature3') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable essential-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.essential.feature4') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable essential-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.essential.feature5') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="essential-bottom lawyer-bottom">
                            <div class="ticket-container">
                                <div class="d-flex gap-2 align-items-start">
                                    <img class="mt-1" src="{{ asset('assets/images/essential-clock.svg') }}" alt="">
                                    <p class="fw-bold">
                                        {{ __('document.packages.plans.essential.additional_time') }}
                                    </p>
                                </div>
                            </div>
                            <div>
                                <button class="btn w-100 rounded-3">
                                    {{ __('document.packages.plans.essential.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Growth Plan -->
                <div class="col-lg-4">
                    <div class="plan-card pro-plan">
                        <div class="flex-grow-1">
                            <div class="plan-tag pro">{{ __('document.packages.plans.growth.name') }}</div>
                            <div class="py-4 d-flex align-items-center gap-2 justify-content-center">
                                <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                <h2 class="navy fw-bold">
                                    {{ __('document.packages.plans.growth.price') }}
                                </h2>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="plan-counter pro-counter">1</div>
                                <h6>
                                    {{ __('document.packages.plans.growth.consultations') }}
                                </h6>
                            </div>
                            <p class="fw-bold py-3 dark-gray">يشمل</p>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.growth.feature1') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.growth.feature2') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.growth.feature3') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.growth.feature4') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.growth.feature5') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="pro-bottom">
                            <div class="ticket-container" style="background-color: #F8F8F8">
                                <img src="{{ asset('assets/images/pro-ticket.svg') }}" alt="">
                                <h6 class="fw-bold">{{ __('document.packages.plans.growth.discount') }}</h6>
                            </div>
                            <div>
                                <button class="btn w-100 rounded-3">
                                    {{ __('document.packages.plans.growth.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premier Plan -->
                <div class="col-lg-4">
                    <div class="plan-card flexible-plan">
                        <div class="flex-grow-1">
                            <div class="plan-tag flexible">{{ __('document.packages.plans.premier.name') }}</div>
                            <div class="py-4 d-flex align-items-center gap-2 justify-content-center">
                                <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                <h2 class="navy fw-bold">
                                    {{ __('document.packages.plans.premier.price') }}
                                </h2>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="plan-counter premier-counter">6</div>
                                <h6>
                                    {{ __('document.packages.plans.premier.consultations') }}
                                </h6>
                            </div>
                            <p class="fw-bold py-3 dark-gray">يشمل</p>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.premier.feature1') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.premier.feature2') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.premier.feature3') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.premier.feature4') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('document.packages.plans.premier.feature5') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="flexible-bottom">
                            <div class="ticket-container" style="background-color: #EFEFEF">
                                <img src="{{ asset('assets/images/flexible-ticket.svg') }}" alt="">
                                <h6 class="fw-bold">{{ __('document.packages.plans.premier.discount') }}</h6>
                            </div>
                            <div>
                                <button class="btn w-100 rounded-3">
                                    {{ __('document.packages.plans.premier.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefit-section lawyer-form-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="container">
            <div class="card benefit-card">
                <div class="row">
                    <div class="col-lg-6">
                        <div
                            class="benefit-card-left position-relative text-center d-flex align-items-center flex-column justify-content-center">
                            <div class="pb-5 ">
                                <img src="{{asset("assets/images/lawyer-art.svg")}}" alt="">
                            </div>
                            <div class="text-white">
                                <h5 class="fw-bold">
                                    {{ __('document.form.contact_text') }}
                                </h5>
                            </div>
                            <img class="benefit-pattern-left" src="{{asset("assets/images/benefit-pattern-left.svg")}}"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="px-5 py-3">
                            <h5 class="fw-bold pb-4">
                                {{ __('document.form.title') }}
                            </h5>
                            <form action="">
                                <div class="mb-3">
                                    <label for=""
                                           class="form-label fw-semibold">{{ __('document.form.lawsuit_question') }}</label>
                                    <div class="custom-dropdown-wrapper position-relative">
                                        <button class="form-select custom-dropdown-toggle" type="button">
                                            {{ __('document.form.yes_no_placeholder') }}
                                        </button>
                                        <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                            <li class="dropdown-item">{{ __('document.form.yes') }}</li>
                                            <li class="dropdown-item">{{ __('document.form.no') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for=""
                                           class="form-label fw-semibold">{{ __('document.form.consultation_type') }}</label>
                                    <div class="custom-dropdown-wrapper position-relative">
                                        <button class="form-select custom-dropdown-toggle" type="button">
                                            {{ __('document.form.select_case_placeholder') }}
                                        </button>
                                        <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                            <li class="dropdown-item">{{ __('document.form.commercial_case') }}</li>
                                            <li class="dropdown-item">{{ __('document.form.commercial_case') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for=""
                                           class="form-label fw-semibold">{{ __('document.form.consultation_details') }}</label>
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                                <div class="mb-4">
                                    <div class="file-upload-container">
                                        <div class="file-upload-wrapper" id="fileUploadWrapper">
                                            <input type="file" class="file-input" id="fileInput" multiple>
                                            <div class="file-upload-content">
                                                <p class="file-upload-text"
                                                   id="fileUploadText">{{ __('document.form.file_upload') }}</p>
                                                <button type="button" class="select-file-btn" id="selectFileBtn">
                                                    <img src="{{asset('assets/images/uploader-icon.svg')}}" alt="">
                                                    {{ __('document.form.select_file') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="{{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <button class="btn btn-primary rounded-4 btn-lg px-5 py-3 fw-semibold">
                                        {{ __('document.form.send_button') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 