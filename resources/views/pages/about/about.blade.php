@extends('layouts.main')

@section('content')
    <div class="about-container">
        <div class="text-center">
            <h2 class="fw-bold primary">{{ __('about.about.title') }}</h2>
        </div>
        <div class="container">
            <div class="about-content mb-3" @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                <h4 class="primary fw-bold pb-2">{{ __('about.about.sections.story.title') }}</h4>
                <p>{!! nl2br(e(__('about.about.sections.story.content'))) !!}</p>
            </div>
            <div class="about-content mb-3" @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                <h4 class="primary fw-bold pb-2">{{ __('about.about.sections.about.title') }}</h4>
                <p>{!! nl2br(e(__('about.about.sections.about.content'))) !!}</p>
            </div>
            <div class="about-large-content mb-3" @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                <h4 class="primary fw-bold pb-2">{{ __('about.about.sections.objective.title') }}</h4>
                <p>{!! nl2br(e(__('about.about.sections.objective.content'))) !!}</p>
            </div>
            <div class="about-content" @if(app()->getLocale() == 'ar') dir="rtl" style="text-align: right;" @endif>
                <h4 class="primary fw-bold pb-2">{{ __('about.about.sections.vision.title') }}</h4>
                <p>{!! nl2br(e(__('about.about.sections.vision.content'))) !!}</p>
            </div>
        </div>
    </div>
@endsection
