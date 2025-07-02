@extends('layouts.main')

@section('content')
    <div class="contact-container">
        <div class="container">
            <div class="text-center header max-50 m-auto" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
                <h2 class="saudi pb-4 primary">
                    {{ __('contact.contact_heading.title') }}
                </h2>
                <h4 class="fw-semibold">
                    {{ __('contact.contact_heading.subtitle') }}
                </h4>
            </div>
        </div>
        <section class="benefit-section contact-card-section">
            <div class="container">
                <div class="card benefit-card">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="benefit-card-left position-relative" @if(app()->getLocale() == 'ar') dir="rtl"
                                 style="text-align: right;" @endif>
                                <div>
                                    <h1 class="fw-bold pb-5 text-white">
                                        {{ __('contact.contact_card.title') }}
                                    </h1>
                                </div>
                                <div class="text-white">
                                    <div class="mb-5">
                                        <div class="d-flex gap-2 align-items-center pb-3">
                                            <img src="{{asset('assets/images/w-white.svg')}}" alt="">
                                            <h6 class="fw-semibold">{{ __('contact.contact_card.channels.whatsapp.label') }}</h6>
                                        </div>
                                        <h6 class="fw-semibold pb-2">{{ __('contact.contact_card.channels.whatsapp.number') }}</h6>
                                        <p>{{ __('contact.contact_card.channels.whatsapp.hours') }}</p>
                                    </div>
                                    <div class="mb-5">
                                        <div class="d-flex gap-2 align-items-center pb-3">
                                            <img src="{{asset('assets/images/phone-white.svg')}}" alt="">
                                            <h6 class="fw-semibold">{{ __('contact.contact_card.channels.phone.label') }}</h6>
                                        </div>
                                        <h6 class="fw-semibold pb-2">{{ __('contact.contact_card.channels.phone.number') }}</h6>
                                        <p>{{ __('contact.contact_card.channels.phone.hours') }}</p>
                                    </div>
                                    <div class="">
                                        <div class="d-flex gap-2 align-items-center pb-3">
                                            <img src="{{asset('assets/images/email-white.svg')}}" alt="">
                                        </div>
                                        <h6 class="fw-semibold">{{ __('contact.contact_card.channels.email.label') }}</h6>
                                        <p>{{ __('contact.contact_card.channels.email.address') }}</p>
                                    </div>
                                </div>
                                <img class="benefit-pattern" src="{{asset("assets/images/benefit-pattern.svg")}}"
                                     alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="px-4 px-lg-5 py-3" @if(app()->getLocale() == 'ar') dir="rtl"
                                 style="text-align: right;" @endif>
                                <form action="">
                                    <div class="mb-3">
                                        <label for=""
                                               class="form-label fw-semibold">{{ __('contact.contact_card.form.labels.name') }}</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""
                                               class="form-label fw-semibold">{{ __('contact.contact_card.form.labels.email') }}</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for=""
                                               class="form-label fw-semibold">{{ __('contact.contact_card.form.labels.phone') }}</label>
                                        <input type="number" id="phone" class="form-control" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""
                                               class="form-label fw-semibold">{{ __('contact.contact_card.form.labels.subject') }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for=""
                                               class="form-label fw-semibold">{{ __('contact.contact_card.form.labels.message') }}</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="{{ app()->getLocale() === 'ar' ? 'text-start' : 'text-end' }}">
                                        <button class="btn btn-primary rounded-4 btn-lg px-4 py-2 fw-semibold">
                                            {{ __('contact.contact_card.form.submit') }}
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
