@extends('layouts.main')

@section('content')
    <div class="about-container margin-top ">
        <div class="padding-top">
            <div class="text-center mb-5">
                <h2 class="fw-bold primary saudi">{{ __('about.about.title') }}</h2>
            </div>
            <div class="container">
                @php
                    $sections = ['story', 'about', 'objective', 'vision'];
                @endphp

                @foreach ($sections as $section)
                    <div class="about-content mb-3" @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                        <img class="top-left" src="{{ asset('assets/images/top-left.svg') }}" alt="">
                        <img class="top-right" src="{{ asset('assets/images/top-right.svg') }}" alt="">
                        <img class="top-quote" src="{{ asset('assets/images/top-quote.svg') }}" alt="">

                        <h4 class="primary fw-bold pb-2">
                            {{ __('about.about.sections.' . $section . '.title') }}
                        </h4>

                        <p class="text-justify">
                            {!! nl2br(e(__('about.about.sections.' . $section . '.content'))) !!}
                        </p>

                        <img class="bottom-left" src="{{ asset('assets/images/bottom-left.svg') }}" alt="">
                        <img class="bottom-right" src="{{ asset('assets/images/bottom-right.svg') }}" alt="">
                        <img class="bottom-quote" src="{{ asset('assets/images/bottom-qoute.svg') }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
