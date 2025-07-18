@extends('layouts.main')

@section('content')
    <header class="lawyer-header margin-top" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="padding-top">
            <div class="text-center header-top">
                <h2 class="primary pb-3 lf-heading">{{ __('lawyer.header.title') }}</h2>
                <h5 class="max-50 m-auto d-text-gray lf-para-formatting">{{ __('lawyer.header.subtitle') }}</h5>
            </div>
            <div class="container">
                <div class="row g-4 py-5">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div @if(app()->isLocale('ar')) style="text-align: right;" @endif>
                            <h2 class="pb-3 lf-subheading">
                                {{ __('lawyer.header.service_title') }}
                            </h2>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('lawyer.header.points.choose_package') }}
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('lawyer.header.points.submit_inquiry') }}
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('lawyer.header.points.receive_answers') }}
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="lawyer-points">
                                        <img src="{{ asset('assets/images/blue-tick.svg') }}" alt="">
                                    </div>
                                    <h5>
                                        {{ __('lawyer.header.points.solve_problem') }}
                                    </h5>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary btn-lg px-4 py-2 rounded-4 fw-semibold fs-18">
                                    {{ __('lawyer.header.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div>
                            <img class="w-100 rounded-5" src="{{ asset('assets/images/lawyer-header.png') }}"
                                 alt="{{ __('lawyer.header.title') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="business-plan-section lawyer-plan-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="text-center mb-5">
            <h1 class="primary pb-3 lf-subheading">
                {{ __('lawyer.packages.title') }}
            </h1>
        </div>
        <div class="container">
            <div class="row g-3">
                <!-- Essential Plan -->
                <div class="col-lg-4">
                    <div class="plan-card essential-plan">
                        <div class="flex-grow-1">
                            <div class="plan-tag essential">{{ __('lawyer.packages.plans.essential.name') }}</div>
                            <div class="py-4 d-flex align-items-center gap-3 justify-content-center" dir="ltr">
                                <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                <h2 class="navy fw-bold">
                                    {{ __('lawyer.packages.plans.essential.price') }}
                                </h2>
                            </div>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-counter essential-counter">1</div>
                                    <h6>
                                        {{ __('lawyer.packages.plans.essential.consultations') }}
                                    </h6>
                                </div>
                                <p class="fw-bold py-3 dark-gray">{{ __('lawyer.packages.plans.includes') }}</p>
                                <div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="plan-enable essential-counter">
                                            <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                        </div>
                                        <h5>{{ __('lawyer.packages.plans.essential.feature1') }}</h5>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="plan-enable essential-counter">
                                            <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                        </div>
                                        <h5>{{ __('lawyer.packages.plans.essential.feature2') }}</h5>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="plan-enable essential-counter">
                                            <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                        </div>
                                        <h5>{{ __('lawyer.packages.plans.essential.feature3') }}</h5>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="plan-enable essential-counter">
                                            <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                        </div>
                                        <h5>{{ __('lawyer.packages.plans.essential.feature4') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="essential-bottom lawyer-bottom">
                            <div class="ticket-container">
                                <div class="d-flex gap-2 align-items-center">
                                    <img  src="{{ asset('assets/images/flexible-ticket.svg') }}" alt="">
                                    <p class="fw-bold">
                                        {{ __('lawyer.packages.plans.essential.additional_time') }}
                                    </p>
                                </div>
                            </div>
                            <div>
                                <button class="btn w-100 rounded-3">
                                    {{ __('lawyer.packages.plans.essential.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Growth Plan -->
                <div class="col-lg-4">
                    <div class="plan-card pro-plan">
                        <div class="flex-grow-1">
                            <div class="plan-tag pro">{{ __('lawyer.packages.plans.growth.name') }}</div>
                            <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                <h2 class="navy fw-bold">
                                    {{ __('lawyer.packages.plans.growth.price') }}
                                </h2>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="plan-counter pro-counter">6</div>
                                <h6>
                                    {{ __('lawyer.packages.plans.growth.consultations') }}
                                </h6>
                            </div>
                            <p class="fw-bold py-3 dark-gray">{{ __('lawyer.packages.plans.includes') }}</p>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.growth.feature1') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.growth.feature2') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.growth.feature3') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable pro-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.growth.feature4') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="pro-bottom">
                            <div class="ticket-container" style="background-color: #F8F8F8">
                                <img src="{{ asset('assets/images/pro-ticket.svg') }}" alt="">
                                <h6 class="fw-bold">{{ __('lawyer.packages.plans.growth.discount') }}</h6>
                            </div>
                            <div>
                                <button class="btn w-100 rounded-3">
                                    {{ __('lawyer.packages.plans.growth.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premier Plan -->
                <div class="col-lg-4">
                    <div class="plan-card flexible-plan">
                        <div class="flex-grow-1">
                            <div class="plan-tag flexible">{{ __('lawyer.packages.plans.premier.name') }}</div>
                            <div class="py-4 d-flex align-items-center gap-2 justify-content-center" dir="ltr">
                                <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                <h2 class="navy fw-bold">
                                    {{ __('lawyer.packages.plans.premier.price') }}
                                </h2>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="plan-counter premier-counter">12</div>
                                <h6>
                                    {{ __('lawyer.packages.plans.premier.consultations') }}
                                </h6>
                            </div>
                            <p class="fw-bold py-3 dark-gray">{{ __('lawyer.packages.plans.includes') }}</p>
                            <div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.premier.feature1') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.premier.feature2') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.premier.feature3') }}</h5>
                                </div>
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="plan-enable premier-counter">
                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                    </div>
                                    <h5>{{ __('lawyer.packages.plans.premier.feature4') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="flexible-bottom">
                            <div class="ticket-container" style="background-color: #EFEFEF">
                                <img src="{{ asset('assets/images/flexible-ticket.svg') }}" alt="">
                                <h6 class="fw-bold">{{ __('lawyer.packages.plans.premier.discount') }}</h6>
                            </div>
                            <div>
                                <button class="btn w-100 rounded-3">
                                    {{ __('lawyer.packages.plans.premier.button') }}
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
                                <h4 class="lf-subheading">
                                    {{ __('lawyer.form.contact_text') }}
                                </h4>
                            </div>
                            <img class="benefit-pattern-left" src="{{asset("assets/images/benefit-pattern-left.svg")}}"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="px-4 px-md-5 py-3">
                            <h5 class=" pb-4 lf-subheading text-center">
                                {{ __('lawyer.form.title') }}
                            </h5>
                            <form method="POST" action="{{ route('lawyer.submit') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- Lawsuit Question --}}
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">{{ __('lawyer.form.lawsuit_question') }}</label>
                                    <div class="custom-dropdown-wrapper position-relative">
                                        <button type="button"
                                                style="height: 40px"
                                                class="form-select custom-dropdown-toggle @error('lawsuit') is-invalid @enderror"
                                                data-input-id="lawsuit">
                                            {{ old('lawsuit') ? (old('lawsuit') == 'yes' ? __('lawyer.form.yes') : __('lawyer.form.no')) : __('lawyer.form.yes_no_placeholder') }}
                                        </button>
                                        <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                            <li class="dropdown-item" data-value="yes">{{ __('lawyer.form.yes') }}</li>
                                            <li class="dropdown-item" data-value="no">{{ __('lawyer.form.no') }}</li>
                                        </ul>
                                        <input type="hidden" name="lawsuit" id="lawsuit" value="{{ old('lawsuit') }}">
                                        @error('lawsuit')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Consultation Type --}}
                                <div class="mb-3">
                                    <label
                                        class="form-label fw-semibold">{{ __('lawyer.form.consultation_type') }}</label>
                                    <div class="custom-dropdown-wrapper position-relative">
                                        <button type="button"
                                                style="height: 40px"
                                                class="form-select custom-dropdown-toggle @error('consultation_type') is-invalid @enderror"
                                                data-input-id="consultation_type">
                                            {{ old('consultation_type', __('lawyer.form.select_case_placeholder')) }}
                                        </button>
                                        <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                            <li class="dropdown-item" data-value="commercial">{{ __('lawyer.form.commercial_case') }}</li>
                                            <li class="dropdown-item" data-value="civil">{{ __('lawyer.form.civil_case') }}</li>
                                            <li class="dropdown-item" data-value="labor">{{ __('lawyer.form.labor_case') }}</li>
                                            <li class="dropdown-item" data-value="personal_status">{{ __('lawyer.form.personal_status_case') }}</li>
                                            <li class="dropdown-item" data-value="criminal">{{ __('lawyer.form.criminal_case') }}</li>
                                            <li class="dropdown-item" data-value="administrative">{{ __('lawyer.form.administrative_case') }}</li>
                                            <li class="dropdown-item" data-value="real_estate">{{ __('lawyer.form.real_estate_case') }}</li>
                                            <li class="dropdown-item" data-value="enforcement">{{ __('lawyer.form.enforcement_case') }}</li>
                                            <li class="dropdown-item" data-value="other">{{ __('lawyer.form.other_case') }}</li>
                                        </ul>
                                        <input type="hidden" name="consultation_type" id="consultation_type"
                                               value="{{ old('consultation_type') }}">
                                        @error('consultation_type')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Consultation Details --}}
                                <div class="mb-3">
                                    <label
                                        class="form-label fw-semibold">{{ __('lawyer.form.consultation_details') }}</label>
                                    <textarea name="details" rows="3"
                                              class="form-control @error('details') is-invalid @enderror">{{ old('details') }}</textarea>
                                    @error('details')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- File Upload --}}
                                <div class="mb-4">
                                    <x-file-upload
                                        name="file_upload"
                                        :multiple="true"
                                        label="{{ __('translation.form.fields.file_upload') }}"
                                        button-label="{{ __('translation.form.fields.select_file') }}"
                                    />
                                </div>

                                {{-- Submit --}}
                                <div class="{{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <button class="btn btn-primary rounded-4 btn-lg px-5 py-3 fw-semibold">
                                        {{ __('lawyer.form.send_button') }}
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
