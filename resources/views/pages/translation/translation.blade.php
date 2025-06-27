@extends('layouts.main')

@section('content')
    <div class="translation-container">
        <header class="translation-header" @if(app()->isLocale('ar')) dir="rtl" @endif>
            <div>
                <div class="text-center">
                    <h2 class="primary pb-3 fw-bold">Translation Services</h2>
                    <h5 class="fw-semibold">Professional Translation to Support Your Business Operations</h5>
                </div>
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-lg-6">
                            <div>
                                <h5 class="header-desc pb-4">
                                    Defaa provides subscribers with access to professional translation services through
                                    partnerships with specialized, certified Saudi translation firms. These services are
                                    overseen by licensed translators, linguistic experts, and consultants, aiming to
                                    deliver smart translation solutions that save time and money.
                                    Enjoy a professional translation service with speed, accuracy, confidentiality,
                                    commitment to deadlines, diverse languages, competitive pricing and specialized
                                    expertise to meet all your needs
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <img class="img-fluid rounded-5"
                                     src="{{asset('assets/images/translation-header.png')}}"
                                     alt="{{ __('business.header.title') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
@endsection
