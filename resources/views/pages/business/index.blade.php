@extends('layouts.main')

@section('content')
    <header class="business-header margin-top" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="padding-top">
            <div class="text-center header">
                <h1 class="primary pb-3 saudi">{{ __('business.header.title') }}</h1>
                <h5 class="fw-semibold">{{ __('business.header.subtitle') }}</h5>
            </div>
            <div class="container">
                <div class="row g-4 py-5">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div>
                            <h1 class="pb-3 fw-bold position-relative ibm-plex">
                                {!! __('business.header.main_title') !!}
                            </h1>
                            <h5 class="pb-4 text-justify d-text-gray">
                                {{ __('business.header.description') }}
                            </h5>
                            <div>
                                <button class="btn btn-primary btn-lg px-4 rounded-4 fw-semibold">
                                    {{ __('business.header.button') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div>
                            <img class="img-fluid rounded-5" src="{{asset('assets/images/bussiness-header-img.png')}}"
                                 alt="{{ __('business.header.title') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="business-plan-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="text-md-center {{app()->getLocale()=='ar' ? 'text-right' : 'text-start'}} container">
            <h1 class="primary pb-3 fw-bold ibm-plex">
                {{ __('business.packages.title') }}
            </h1>
            <h5>
                {{ __('business.packages.subtitle') }}
            </h5>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8 text-center">
                    <ul class="nav nav-pills mb-3 subscription-toggle flex-nowrap" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home"
                                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                {{ __('business.packages.subscription_tabs.annual') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                {{ __('business.packages.subscription_tabs.six_month') }}
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="business-second-tabs position-relative">
                        <ul class="nav nav-tabs border-0 mb-0" id="businessSecondTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="six-month-tab" data-bs-toggle="tab"
                                        data-bs-target="#six-month" type="button" role="tab" aria-controls="six-month"
                                        aria-selected="true">
                                    {{ __('business.packages.second_tabs.six_month') }}
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="annual-tab" data-bs-toggle="tab" data-bs-target="#annual"
                                        type="button" role="tab" aria-controls="annual" aria-selected="false">
                                    {{ __('business.packages.second_tabs.annual') }}
                                </button>
                            </li>
                        </ul>
                        <div class="discount-badge">
                            <p>{{ __('business.packages.discount.save_percentage', ['percentage' => 15]) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active business-tab-pane" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab"
                     tabindex="0">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="plan-card essential-plan">
                                <div class="flex-grow-1">
                                    <div
                                        class="plan-tag essential">{{ __('business.packages.plans.essential.name') }}</div>
                                    <div class="py-4 d-flex align-items-center gap-2 justify-content-center">
                                        <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                        <h2 class="navy fw-bold">
                                            {{ __('business.packages.plans.essential.price') }}
                                        </h2>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter essential-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.essential.features.0') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter essential-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.essential.features.1') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter essential-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.essential.features.2') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter essential-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.essential.features.3') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter essential-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.essential.features.4') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter essential-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.essential.features.5') }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="essential-bottom">
                                    <div class="ticket-container">
                                        <img src="{{asset("assets/images/essential-ticket.svg")}}" alt="">
                                        <h6 class="fw-bold">10%</h6>
                                        <p>{{ __('business.packages.plans.essential.discount') }}</p>
                                    </div>
                                    <div>
                                        <button
                                            class="btn w-100 rounded-3">{{ __('business.packages.plans.essential.button') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="plan-card pro-plan">
                                <div class="flex-grow-1">
                                    <div
                                        class="plan-tag pro">{{ __('business.packages.plans.professional.name') }}</div>
                                    <div class="py-4 d-flex align-items-center gap-2 justify-content-center">
                                        <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                        <h2 class="navy fw-bold">
                                            {{ __('business.packages.plans.professional.price') }}
                                        </h2>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.0') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.1') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.2') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.3') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.4') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.5') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.6') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div class="plan-counter pro-counter">2</div>
                                            <h5>
                                                {{ __('business.packages.plans.professional.features.7') }}
                                            </h5>
                                        </div>

                                    </div>
                                </div>
                                <div class="pro-bottom">
                                    <div class="ticket-container">
                                        <img src="{{asset("assets/images/pro-ticket.svg")}}" alt="">
                                        <h6 class="fw-bold">10%</h6>
                                        <p>{{ __('business.packages.plans.professional.discount') }}</p>
                                    </div>
                                    <div>
                                        <button
                                            class="btn w-100 rounded-3">{{ __('business.packages.plans.professional.button') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="plan-card flexible-plan">
                                @if(app()->getLocale() === 'ar')
                                    <img class="recommend-tag" src="{{asset("assets/images/recommend-ar.svg")}}" alt="">
                                @else
                                    <img class="recommend-tag" src="{{asset("assets/images/recommend.svg")}}" alt="">
                                @endif
                                <div class="flex-grow-1">
                                    <div
                                        class="plan-tag flexible">{{ __('business.packages.plans.flexible.name') }}</div>
                                    <div class="py-4 d-flex align-items-center gap-2 justify-content-center">
                                        <img src="{{asset('assets/images/dinar.svg')}}" alt="">
                                        <h2 class="navy fw-bold">
                                            {{ __('business.packages.plans.flexible.price') }}
                                        </h2>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.0') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.1') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.2') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.3') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.4') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.5') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.6') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.7') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.8') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.9') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.10') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.11') }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center gap-3 mb-3">
                                            <div>
                                                <div class="counter-component">
                                                    <button class="counter-btn decrement" id="decrementBtn">−</button>
                                                    <div class="counter-display" id="counterDisplay">0</div>
                                                    <button class="counter-btn increment" id="incrementBtn">+</button>
                                                </div>
                                            </div>
                                            <h5>
                                                {{ __('business.packages.plans.flexible.features.12') }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="flexible-bottom">
                                    <div class="ticket-container">
                                        <img src="{{asset("assets/images/flexible-ticket.svg")}}" alt="">
                                        <h6 class="fw-bold">10%</h6>
                                        <p>{{ __('business.packages.plans.flexible.discount') }}</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn w-100 flex-grow-1">
                                            {{ __('business.packages.plans.flexible.confirm') }}
                                        </button>
                                        <button class="btn btn-outline-secondary w-100 flex-grow-1">
                                            {{ __('business.packages.plans.flexible.reset') }}
                                        </button>
                                    </div>
                                    <div>
                                        <button
                                            class="btn w-100 rounded-3">{{ __('business.packages.plans.flexible.button') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                     tabindex="0">...
                </div>
            </div>
        </div>
    </section>
    <section class="lawyer-section">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                        <h1 class="pb-3 primary fw-bold ibm-plex">
                            {!! __('business.lawyer_section.title') !!}
                        </h1>
                        <h2 class="pb-3 fw-semibold ibm-plex">
                            {{ __('business.lawyer_section.subtitle') }}
                        </h2>
                        <h5 class="pb-4 text-justify">
                            {{ __('business.lawyer_section.description') }}
                        </h5>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div>
                        <img class="img-fluid rounded-4" src="{{ asset('assets/images/lawyer-image.png') }}"
                             alt="{{ __('business.lawyer_section.title') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefit-section">
        <div class="container">
            <div class="card benefit-card">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="benefit-card-left position-relative" @if(app()->getLocale() == 'ar') dir="rtl"
                             style="text-align: right;" @endif>
                            <div>
                                <h1 class="fw-bold pb-4 text-white ibm-plex">
                                    {{ __('business.benefits_section.title') }}
                                </h1>
                            </div>
                            <div class="text-white">
                                @foreach(__('business.benefits_section.benefits') as $benefit)
                                    <div class="d-flex gap-3 mb-3">
                                        <div class="list-circle">
                                            <img src="{{ asset('assets/images/green-tick.svg') }}" alt="">
                                        </div>
                                        <div>
                                            <h5 class="fw-bold pb-2">
                                                {{ $benefit['title'] }}
                                            </h5>
                                            <p>
                                                {{ $benefit['text'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <img class="benefit-pattern" src="{{asset("assets/images/benefit-pattern.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5" @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                            <div>
                                <h2 class="pb-4 fw-bold ibm-plex">
                                    {{ __('business.benefits_section.form_title') }}
                                </h2>
                            </div>
                            <form method="POST" action="{{ route('business.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        {{ __('business.benefits_section.form_labels.name') }}
                                    </label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        {{ __('business.benefits_section.form_labels.phone') }}
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text">+966</span>
                                        <input
                                            type="tel"
                                            id="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            name="phone"
                                            value="{{ old('phone') }}" {{-- This will only show 9 digits --}}
                                            placeholder="5XXXXXXXX"
                                            maxlength="9"
                                            pattern="[1-9][0-9]{8}"
                                            inputmode="numeric"
                                            required
                                        >
                                    </div>
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        {{ __('business.benefits_section.form_labels.city') }}
                                    </label>
                                    <div class="custom-dropdown-wrapper position-relative">
                                        <button type="button"
                                                style="height: 40px"
                                                class="form-select custom-dropdown-toggle @error('city') is-invalid @enderror"
                                                data-input-id="city">
                                            {{ old('city', __('business.benefits_section.form_labels.city')) }}
                                        </button>
                                        <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                            <li class="dropdown-item" data-value="Riyadh">Riyadh</li>
                                            <li class="dropdown-item" data-value="Jeddah">Jeddah</li>
                                            <li class="dropdown-item" data-value="Dammam">Dammam</li>
                                        </ul>
                                        <input type="hidden" name="city" id="city" value="{{ old('city') }}">
                                        @error('city')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">
                                        {{ __('business.benefits_section.form_labels.entity_type') }}
                                    </label>
                                    <div class="custom-dropdown-wrapper position-relative">
                                        <button type="button"
                                                style="height: 40px"
                                                class="form-select custom-dropdown-toggle @error('entity_type') is-invalid @enderror"
                                                data-input-id="entity_type">
                                            {{ old('entity_type', __('business.benefits_section.form_labels.entity_type')) }}
                                        </button>
                                        <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                            <li class="dropdown-item" data-value="individual">Individual</li>
                                            <li class="dropdown-item" data-value="company">Company</li>
                                            <li class="dropdown-item" data-value="government">Government</li>
                                        </ul>
                                        <input type="hidden" name="entity_type" id="entity_type"
                                               value="{{ old('entity_type') }}">
                                        @error('entity_type')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button class="btn btn-primary rounded-4 btn-lg px-5 py-3 fw-semibold">
                                        {{ __('business.benefits_section.submit_button') }}
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
