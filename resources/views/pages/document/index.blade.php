@extends('layouts.main')

@section('content')
    <header class="document-header margin-top" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="padding-top">
            <div class="text-center header-top">
                <h2 class="pb-3 saudi">{{ __('document.title') }}</h2>
                <h5 class="max-50 m-auto dark-gray">{{ __('document.subtitle') }}</h5>
            </div>
            <section class="legal-section">
                <div class="container">
                    <div class="search-container fade-in">
                        <div class="input-group-search">
                            <input type="text" class="form-control search-input"
                                   placeholder="{{ __('document.search_placeholder') }}"
                                   aria-label="Search Document">
                            <button class="btn search-btn" type="button">{{ __('document.search_button') }}</button>
                        </div>
                    </div>

                    <div class="category-grid fade-in">
                        <div class="row g-2 mb-2">
                            <div class="col-lg-4">
                                <div class="category-card">
                                    <h3 class="category-title">{{ __('document.categories.commercial') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="category-card">
                                    <h3 class="category-title">{{ __('document.categories.appropriate') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="category-card">
                                    <h3 class="category-title">{{ __('document.categories.technical') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-lg-4">
                                <div class="category-card">
                                    <h3 class="category-title">{{ __('document.categories.service') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="category-card">
                                    <h3 class="category-title">{{ __('document.categories.general') }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="category-card">
                                    <h3 class="category-title">{{ __('document.categories.employment') }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contract-tags fade-in">
                        <a href="#" class="contract-tag">{{ __('document.contracts.freelance') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.website_development') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.website_development') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.equipment_rental') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.equipment_rental') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.marketing') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.supply') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.confidentiality') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.consultation') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.dates') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.goods_transport') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.marketing') }}</a>
                        <a href="#" class="contract-tag">{{ __('document.contracts.supply') }}</a>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <section class="contract-section">
        <div class="container">
            <div class="pb-5 text-center">
                <h2 class="fw-bold primary ibm-plex">{{ __('document.create_contract.title') }}</h2>
            </div>
            <div class="d-flex align-items-center flex-column flex-lg-row gap-5 gap-lg-0">
                <div>
                    @if(app()->getLocale() === 'ar')
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-ar1.svg') }}" alt="">
                    @else
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-1.svg') }}" alt="">
                    @endif
                </div>
                <div>
                    @if(app()->getLocale() === 'ar')
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-ar2.svg') }}" alt="">
                    @else
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-2.svg') }}" alt="">
                    @endif
                </div>
                <img class="mt-0 mt-lg-5 d-none d-lg-block trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
                <div>
                    @if(app()->getLocale() === 'ar')
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-ar3.svg') }}" alt="">
                    @else
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-3.svg') }}" alt="">
                    @endif
                </div>
                <div>
                    @if(app()->getLocale() === 'ar')
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-ar4.svg') }}" alt="">
                    @else
                        <img class="img-fluid" src="{{ asset('assets/images/doc-step-4.svg') }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="business-plan-section document-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
        <div class="text-center header">
            <h2 class="primary pb-3 fw-bold ibm-plex">
                {{ __('document.packages.title') }}
            </h2>
            <h5>
                {{ __('document.packages.subtitle') }}
            </h5>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <ul class="nav nav-pills mb-3 subscription-toggle" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home"
                                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                {{ __('document.packages.subscription.annual') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                {{ __('document.packages.subscription.six_months') }}
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab"
                     tabindex="0">
                    @php
                        $plans = [
                            [
                                'key' => 'launch',
                                'price' => 200,
                                'class' => 'essential-plan',
                                'tag_class' => 'essential',
                                'counter_class' => 'essential-counter',
                                'bottom_class' => 'essential-bottom',
                                'features' => [
                                    'creation',
                                    'one_document',
                                    'single_user',
                                    'share_download',
                                    'management',
                                ],
                            ],
                            [
                                'key' => 'growth',
                                'price' => 1000,
                                'class' => 'pro-plan',
                                'tag_class' => 'pro',
                                'counter_class' => 'pro-counter',
                                'bottom_class' => 'pro-bottom',
                                'features' => [
                                    'creation',
                                    'one_document',
                                    'single_user',
                                    'share_download',
                                    'management',
                                ],
                            ],
                            [
                                'key' => 'premier',
                                'price' => 2000,
                                'class' => 'flexible-plan',
                                'tag_class' => 'flexible',
                                'counter_class' => 'premier-counter',
                                'bottom_class' => 'flexible-bottom',
                                'features' => [
                                    'creation',
                                    'multiple_documents',
                                    'multiple_users',
                                    'share_download',
                                    'management',
                                ],
                            ],
                        ];
                    @endphp

                    <div class="row g-3">
                        @foreach($plans as $plan)
                            <div class="col-lg-4">
                                <div class="plan-card {{ $plan['class'] }} document-plan-card">
                                    <div class="flex-grow-1">
                                        <div class="plan-tag {{ $plan['tag_class'] }}">
                                            {{ __('document.packages.plans.' . $plan['key'] . '.name') }}
                                        </div>

                                        <div class="py-4 d-flex align-items-center gap-2 justify-content-center">
                                            <img src="{{ asset('assets/images/dinar.svg') }}" alt="">
                                            <h2 class="navy fw-bold">{{ $plan['price'] }}</h2>
                                        </div>

                                        <div>
                                            @foreach($plan['features'] as $feature)
                                                <div class="d-flex align-items-center gap-3 mb-3">
                                                    <div class="plan-enable {{ $plan['counter_class'] }}">
                                                        <img src="{{ asset('assets/images/white-tick.svg') }}" alt="">
                                                    </div>
                                                    <h5>{{ __('document.packages.features.' . $feature) }}</h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="{{ $plan['bottom_class'] }}">
                                        <div>
                                            <button class="btn w-100 rounded-3">
                                                {{ __('document.packages.subscribe') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                     tabindex="0">
                    <!-- Monthly subscription content would go here -->
                </div>
            </div>
        </div>
    </section>
    <section class="benefit-section document-form-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
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
                                <h2 class="fw-bold pb-4 ibm-plex">
                                    {{ __('document.form.found_question') }}
                                </h2>
                                <h5 class="fw-bold">
                                    {{ __('document.form.contact_text') }}
                                </h5>
                            </div>
                            <img class="benefit-pattern-left" src="{{asset("assets/images/benefit-pattern-left.svg")}}"
                                 alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3">
                            <h5 class="fw-bold pb-4 ibm-plex">
                                {{ __('document.form.title') }}
                            </h5>
                            <form method="POST" action="{{ route('document.submit') }}">
                                @csrf

                                {{-- Name --}}
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">{{ __('document.form.name_label') }}</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">{{ __('document.form.phone_label') }}</label>
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

                                {{-- Email --}}
                                <div class="mb-4">
                                    <label class="form-label">{{ __('document.form.email_label') }}</label>
                                    <input type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Description --}}
                                <div class="mb-4">
                                    <label class="form-label">{{ __('document.form.description_label') }}</label>
                                    <textarea name="description"
                                              class="form-control @error('description') is-invalid @enderror"
                                              rows="3">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Submit --}}
                                <div class="{{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }}">
                                    <button class="btn btn-primary rounded-4 btn-lg px-5 py-3 fw-semibold">
                                        {{ __('document.form.submit_button') }}
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
