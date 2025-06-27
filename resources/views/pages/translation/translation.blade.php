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
    </div>
@endsection
