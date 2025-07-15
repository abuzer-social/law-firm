@extends('layouts.main')

@section('content')
    <div class="translation-container">
        <header class="translation-header margin-top" @if(app()->isLocale('ar')) dir="rtl" @endif>
            <div class="padding-top">
                <div class="text-center header-top">
                    <h2 class="primary pb-3 lf-heading">
                        {{ __('translation.header.title') }}
                    </h2>
                    <h5 class="fw-semibold">
                        {{ __('translation.header.subtitle') }}
                    </h5>
                </div>
                <div class="container">
                    <div class="row align-items-center g-4 py-5">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div @if(app()->isLocale('ar')) style="text-align: right;" @endif>
                                <h5 class="header-desc text-justify pb-4">
                                    {{ __('translation.header.description') }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
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
                <h1 class="fw-bold primary ibm-plex">
                    {{ __('translation.specializations.title') }}
                </h1>
            </div>
            <div class="container d-none d-lg-block">
                <div class="row {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }}">
                    <div class="col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-1.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.website') !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-2.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.technical') !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-3.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.medical') !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-4.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.legal') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }}">
                    <div class="col d-none d-lg-block"></div>
                    <div class="col col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-5.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.financial') !!}</p>
                        </div>
                    </div>
                    <div class="col d-none d-lg-block"></div>
                    <div class="col d-none d-lg-block"></div>
                    <div class="col-lg-3">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-6.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.commercial') !!}</p>
                        </div>
                    </div>
                    <div class="col d-none d-lg-block"></div>
                </div>
            </div>
            <div class="container d-block d-lg-none">
                <div class="row {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }}">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-1.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.website') !!}</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-2.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.technical') !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-12">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-5.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.financial') !!}</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-3.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.medical') !!}</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-4.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.legal') !!}</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-12">
                        <div class="trans-spec-content">
                            <img src="{{ asset('assets/images/translation-s-6.svg') }}" alt="">
                            <p>{!! __('translation.specializations.types.commercial') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="translation-service">
            <div class="container">
                <div class="pb-5 text-center">
                    <h2 class="fw-bold primary ibm-plex">{{ __('translation.services.how_service_works') }}</h2>
                </div>
                <div class="d-flex align-items-center flex-column flex-lg-row gap-5 gap-lg-0">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-1.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-1.svg') }}" alt="">
                        @endif
                    </div>
                    <img class="mt-0 mt-lg-5 trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-2.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-2.svg') }}" alt="">
                        @endif
                    </div>
                    <img class="mt-0 mt-lg-5 trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
                    <div>
                        @if(app()->getLocale() === 'ar')
                            <img class="img-fluid" src="{{ asset('assets/images/ts-ar-3.svg') }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/ts-3.svg') }}" alt="">
                        @endif
                    </div>
                    <img class="mt-0 mt-lg-5 trans-stepper" src="{{ asset('assets/images/proceed.svg') }}" alt="">
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
                                class="benefit-card-left translation-card-left justify-content-center position-relative d-flex align-items-center"
                                @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                                <div class="text-white text-center">
                                    <div class="pb-5">
                                        <img src="{{asset('assets/images/trans-form-img.svg')}}" alt="">
                                    </div>
                                    <div>
                                        <h2 class="fw-bold pb-4 ibm-plex">
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
                            <div class="p-2 p-sm-4" @if(app()->getLocale() == 'ar') dir="rtl"
                                 style="text-align: right;" @endif>
                                <div>
                                    <h2 class="pb-4 fw-bold ibm-plex">
                                        {{ __('translation.form.title') }}
                                    </h2>
                                </div>
                                <form method="POST" action="{{ route('translation.submit') }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <input type="text" name="file_name"
                                               class="form-control @error('file_name') is-invalid @enderror"
                                               value="{{ old('file_name') }}"
                                               placeholder="{{ __('translation.form.fields.file_name') }}">
                                        @error('file_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button type="button"
                                                            style="height: 40px"
                                                            class="form-select custom-dropdown-toggle @error('translate_from') is-invalid @enderror"
                                                            data-input-id="translate_from">
                                                        {{ old('translate_from', __('translation.form.fields.translate_from')) }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item"
                                                            data-value="certified">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item"
                                                            data-value="standard">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                    <input type="hidden" name="translate_from" id="translate_from"
                                                           value="{{ old('translate_from') }}">
                                                    @error('translate_from')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button type="button"
                                                            style="height: 40px"
                                                            class="form-select custom-dropdown-toggle @error('translate_to') is-invalid @enderror"
                                                            data-input-id="translate_to">
                                                        {{ old('translate_to', __('translation.form.fields.translate_to')) }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item"
                                                            data-value="certified">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item"
                                                            data-value="standard">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                    <input type="hidden" name="translate_to" id="translate_to"
                                                           value="{{ old('translate_to') }}">
                                                    @error('translate_to')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        {{-- Translation Quality --}}
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button type="button"
                                                            style="height: 40px"
                                                            class="form-select custom-dropdown-toggle @error('translation_quality') is-invalid @enderror"
                                                            data-input-id="translation_quality">
                                                        {{ old('translation_quality', __('translation.form.fields.translation_quality')) }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item"
                                                            data-value="certified">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item"
                                                            data-value="standard">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                    <input type="hidden" name="translation_quality"
                                                           id="translation_quality"
                                                           value="{{ old('translation_quality') }}">
                                                    @error('translation_quality')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Specialization --}}
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="mb-4">
                                                <div class="custom-dropdown-wrapper position-relative">
                                                    <button type="button"
                                                            style="height: 40px"
                                                            class="form-select custom-dropdown-toggle @error('specialization') is-invalid @enderror"
                                                            data-input-id="specialization">
                                                        {{ old('specialization', __('translation.form.fields.specialization')) }}
                                                    </button>
                                                    <ul class="custom-dropdown-options list-unstyled shadow-sm">
                                                        <li class="dropdown-item"
                                                            data-value="certified">{{ __('translation.form.dropdown_options.certified') }}</li>
                                                        <li class="dropdown-item"
                                                            data-value="standard">{{ __('translation.form.dropdown_options.standard') }}</li>
                                                    </ul>
                                                    <input type="hidden" name="specialization" id="specialization"
                                                           value="{{ old('specialization') }}">
                                                    @error('specialization')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <x-file-upload
                                        name="file_upload"
                                        :multiple="true"
                                        label="{{ __('translation.form.fields.file_upload') }}"
                                        button-label="{{ __('translation.form.fields.select_file') }}"
                                    />
                                    <div class="mb-4">
        <textarea name="notes"
                  class="form-control @error('notes') is-invalid @enderror"
                  rows="3"
                  placeholder="{{ __('translation.form.fields.notes') }}">{{ old('notes') }}</textarea>
                                        @error('notes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
