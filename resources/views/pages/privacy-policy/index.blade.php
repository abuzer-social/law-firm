@extends('layouts.main')

@section('content')
    <div class="container privacy-wrapper margin-top">
        <div class="privacy-policy-container padding-top">
            <div class="text-center header max-50 m-auto" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
                <h2 class="saudi pb-4 primary">{{ __('privacy-policy.title') }}</h2>
            </div>
            <div class="mt-4 list-container">
                @foreach([
                    'introduction',
                    'data_collection',
                    'data_usage',
                    'data_sharing',
                    'data_security',
                    'user_rights',
                    'cookies'
                ] as $section)
                    <div>
                        <h4 class="primary fw-semibold mb-3">{{ __('privacy-policy.'.$section.'.title') }}</h4>
                        <ul>
                            @foreach(__('privacy-policy.'.$section.'.points') as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
