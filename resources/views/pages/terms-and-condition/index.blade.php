@extends('layouts.main')

@section('content')
    <div class="container terms-wrapper margin-top">
        <div class="terms-container padding-top">
            <div class="text-center header max-50 m-auto" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
                <h2 class="lf-heading pb-4 primary">{{ __('terms-and-condition.title') }}</h2>
            </div>
            <div class="list-container">
                {{-- First Section: Introduction --}}
                <div class="section mb-4">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.introduction.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.introduction.content') as $paragraph)
                            <li class="fs-18 list-style-none">{!! $paragraph !!}</li>
                        @endforeach
                    </ul>

                </div>

                {{-- Second Section: Definitions --}}
                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.definitions.title') }}</h4>
                    <ul>
                        {{--                        @dd(trans('terms-and-condition.sections.definitions.items'))--}}
                        @foreach(trans('terms-and-condition.sections.definitions.items') as $item)
                            <li>
                                <strong class="text-black">{{ $item['term'] }}</strong>
                                {{ $item['definition'] }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Terms of Use Section --}}
                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.terms_of_use.title') }}</h4>

                    {{-- Subsection: Terms of Use --}}
                    <h5 class="dark-gray fw-bold mb-3">
                        {{ __('terms-and-condition.sections.terms_of_use.subsections.terms_of_use_general.title') }}
                    </h5>
                    <div class="highlight mb-3">
                        <ul>
                            @foreach(trans('terms-and-condition.sections.terms_of_use.subsections.terms_of_use_general.content') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Subsection: Client Provisions --}}
                    <h5 class="dark-gray fw-bold mb-3">
                        {{ __('terms-and-condition.sections.terms_of_use.subsections.client_provisions.title') }}
                    </h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.terms_of_use.subsections.client_provisions.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    {{-- Subsection: Data --}}
                    <h5 class="dark-gray fw-bold mb-3">
                        {{ __('terms-and-condition.sections.terms_of_use.subsections.data.title') }}
                    </h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.terms_of_use.subsections.data.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                {{-- Privacy Policy Section --}}
                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.privacy_policy.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.privacy_policy.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>


                {{-- Contract & Electronic Signature Section --}}
                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.contract_signature.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.contract_signature.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.subscriptions_payment.title') }}</h4>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.subscriptions_payment.subsections.intellectual_property.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.subscriptions_payment.subsections.intellectual_property.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.subscriptions_payment.subsections.brand.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.subscriptions_payment.subsections.brand.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.termination.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.termination.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.intellectual_property_trademark.title') }}</h4>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.intellectual_property_trademark.subsections.changes_privacy_policy.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.intellectual_property_trademark.subsections.changes_privacy_policy.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.intellectual_property_trademark.subsections.amendments_general.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.intellectual_property_trademark.subsections.amendments_general.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.intellectual_property_trademark.subsections.trademark.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.intellectual_property_trademark.subsections.trademark.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>


                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.platform_responsibility.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.platform_responsibility.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.platform_responsibility.compensation.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.platform_responsibility.compensation.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.other_parties.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.other_parties.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.electronic_contract_signature.title') }}</h4>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.electronic_contract_signature.subsections.electronic_contract.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.electronic_contract_signature.subsections.electronic_contract.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.electronic_contract_signature.subsections.electronic_signature.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.electronic_contract_signature.subsections.electronic_signature.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>


                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.payment_policy.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.payment_policy.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.termination_of_use.title') }}</h4>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.termination_of_use.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.termination_of_use.cancellation.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.termination_of_use.cancellation.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.general_provisions.title') }}</h4>
                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.general_provisions.subsections.amendments.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.general_provisions.subsections.amendments.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.communication_legal_notifications.title') }}</h4>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.communication_legal_notifications.subsections.communication_areas.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.communication_legal_notifications.subsections.communication_areas.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.communication_legal_notifications.subsections.legal_notices.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.communication_legal_notifications.subsections.legal_notices.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.communication_legal_notifications.subsections.communication_between_parties.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.communication_legal_notifications.subsections.communication_between_parties.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="section">
                    <h4 class="primary fw-semibold mb-3">{{ __('terms-and-condition.sections.applicable_law.title') }}</h4>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.applicable_law.subsections.applicable_law_general.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.applicable_law.subsections.applicable_law_general.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>

                    <h5 class="dark-gray fw-bold mb-3">{{ __('terms-and-condition.sections.applicable_law.subsections.compliance.title') }}</h5>
                    <ul>
                        @foreach(trans('terms-and-condition.sections.applicable_law.subsections.compliance.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
