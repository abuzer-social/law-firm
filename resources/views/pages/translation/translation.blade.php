@extends('layouts.main')

@section('content')
    <div class="translation-container">
        <header class="translation-header" @if(app()->isLocale('ar')) dir="rtl" @endif>
            <div>
                <div class="text-center">
                    <h2 class="primary pb-3 fw-bold">
                        {{ __('translation.header.title') }}
                    </h2>
                    <h5 class="fw-semibold">
                        {{ __('translation.header.subtitle') }}
                    </h5>
                </div>
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-lg-6">
                            <div @if(app()->isLocale('ar')) style="text-align: right;" @endif>
                                <h5 class="header-desc pb-4">
                                    {{ __('translation.header.description') }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <img class="img-fluid rounded-5"
                                     src="{{ asset('assets/images/translation-header.png') }}"
                                     alt="{{ __('translation.header.title') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="translation-specialization">
            <div class="text-center mb-5">
                <h1 class="fw-bold primary">
                    {{ __('translation.specializations.title') }}
                </h1>
            </div>
            <div class="container">
                <div class="row {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }}">
                    <div class="col">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-1.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.website') !!}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-2.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.technical') !!}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-3.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.medical') !!}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-4.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.legal') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }}">
                    <div class="col"></div>
                    <div class="col">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-5.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.financial') !!}</p>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-6.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.commercial') !!}</p>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
        <section class="translation-service">
            <div class="container">
                <div class="pb-5 text-center">
                    <h2 class="fw-bold primary">How the Service Works</h2>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-1.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-1.svg') }}" alt="">
                        @endif
                    </div>
                    <img class="mt-5 trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-2.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-2.svg') }}" alt="">
                        @endif
                    </div>
                    <img class="mt-5 trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-3.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-3.svg') }}" alt="">
                        @endif
                    </div>
                    <img class="mt-5 trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-4.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-4.svg') }}" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="benefit-section">
            <div class="container">
                <div class="card benefit-card">
                    <div class="row">
                        <div class="col-lg-6">
                            <div
                                class="benefit-card-left translation-card-left position-relative d-flex align-items-center"
                                @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                                <div class="text-white text-center">
                                    <div class="pb-5">
                                        <img src="{{asset('assets/images/trans-form-img.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <h2 class="fw-bold pb-4">
                                            {{ __('translation.form.cta.heading') }}
                                        </h2>
                                        <h6>
                                            {{ __('translation.form.cta.description') }}
                                        </h6>
                                    </div>
                                </div>
                                <img class="benefit-pattern" src="{{asset('assets/images/benefit-pattern.svg')}}"
                                     alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4" @if(app()->getLocale() == 'ar') dir="rtl"
                                 style="text-align: right;" @endif>
                                <div>
                                    <h2 class="pb-4 fw-bold">
                                        {{ __('translation.form.title') }}
                                    </h2>
                                </div>
                                <form action="">
                                    <div class="mb-4">
                                        <input type="text" class="form-control"
                                               placeholder="{{ __('translation.form.fields.file_name') }}">
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button class="form-select custom-dropdown-toggle" type="button">
                                                        {{ __('translation.form.fields.translate_from') }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button class="form-select custom-dropdown-toggle" type="button">
                                                        {{ __('translation.form.fields.translate_to') }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button class="form-select custom-dropdown-toggle" type="button">
                                                        {{ __('translation.form.fields.translation_quality') }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button class="form-select custom-dropdown-toggle" type="button">
                                                        {{ __('translation.form.fields.specialization') }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="file-upload-container">
                                            <div class="file-upload-wrapper" id="fileUploadWrapper">
                                                <input type="file" class="file-input" id="fileInput" multiple>
                                                <div class="file-upload-content">
                                                    <p class="file-upload-text"
                                                       id="fileUploadText">{{ __('translation.form.fields.file_upload') }}</p>
                                                    <button type="button" class="select-file-btn" id="selectFileBtn">
                                                        <img src="{{asset('assets/images/uploader-icon.svg')}}" alt="">
                                                        {{ __('translation.form.fields.select_file') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                <textarea class="form-control" name="" id="" rows="3"
                                          placeholder="{{ __('translation.form.fields.notes') }}"></textarea>
                                    </div>
                                    <div class="{{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }}">
                                        <button class="btn btn-primary rounded-4 btn-lg px-5 py-3 fw-semibold">
                                            {{ __('translation.form.cta.button') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
