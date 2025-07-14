@extends('layouts.main')

@section('content')
    <div class="container faq-wrapper margin-top">
        <div class="padding-top">
            <div class="text-center header max-50 m-auto" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
                <h2 class="saudi pb-4 primary">{{ __('faq.title') }}</h2>
            </div>
            <div class="search-container mt-4">
                <div class="position-relative">
                    <input type="text" id="faq-search" class="form-control search-input" placeholder="{{ __('faq.search_placeholder') }}">
                    <button class="btn search-btn position-absolute top-0 end-0" type="button" tabindex="-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                            <path stroke="#fff" stroke-width="2"
                                  d="M21 21l-4.35-4.35m2.1-5.4a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <ul class="nav simple-faq-tabs justify-content-center mb-5" id="faqTab" role="tablist">
                <li class="nav-item m-0" role="presentation">
                    <button class="nav-link m-0 active" id="tab-0" data-bs-toggle="tab" data-bs-target="#tab-pane-0"
                            type="button" role="tab">{{ __('faq.tabs.product.title') }}</button>
                </li>
                <li class="nav-item m-0" role="presentation">
                    <button class="nav-link m-0" id="tab-1" data-bs-toggle="tab" data-bs-target="#tab-pane-1" type="button"
                            role="tab">{{ __('faq.tabs.contract.title') }}</button>
                </li>
                <li class="nav-item m-0" role="presentation">
                    <button class="nav-link m-0" id="tab-2" data-bs-toggle="tab" data-bs-target="#tab-pane-2" type="button"
                            role="tab">{{ __('faq.tabs.lawyer.title') }}</button>
                </li>
                <li class="nav-item m-0" role="presentation">
                    <button class="nav-link m-0" id="tab-3" data-bs-toggle="tab" data-bs-target="#tab-pane-3" type="button"
                            role="tab">{{ __('faq.tabs.accounting.title') }}</button>
                </li>
                <li class="nav-item m-0" role="presentation">
                    <button class="nav-link m-0" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-pane-4" type="button"
                            role="tab">{{ __('faq.tabs.translation.title') }}</button>
                </li>
            </ul>
            <div class="tab-content" id="faqTabContent">
                <div class="tab-pane fade show active" id="tab-pane-0" role="tabpanel">
                    <div class="accordion faq-accordion" id="accordion-0">
                        @foreach(__('faq.tabs.product.questions') as $i => $qa)
                            <div class="accordion-item" data-question="{{ $qa['q'] }}">
                                <h2 class="accordion-header" id="heading-0-{{ $i+1 }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-0-{{ $i+1 }}" aria-expanded="false"
                                            aria-controls="collapse-0-{{ $i+1 }}">
                                        <span>{{ $qa['q'] }}</span>
                                        <span class="faq-toggle-icon">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="16" fill="#0F898C"/>
                                                <path d="M11 14l5 5 5-5" stroke="#fff" stroke-width="2.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapse-0-{{ $i+1 }}" class="accordion-collapse collapse" aria-labelledby="heading-0-{{ $i+1 }}"
                                     data-bs-parent="#accordion-0">
                                    <div class="accordion-body">
                                        {{ $qa['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-1" role="tabpanel">
                    <div class="accordion faq-accordion" id="accordion-1">
                        @foreach(__('faq.tabs.contract.questions') as $i => $qa)
                            <div class="accordion-item" data-question="{{ $qa['q'] }}">
                                <h2 class="accordion-header" id="heading-1-{{ $i+1 }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-1-{{ $i+1 }}" aria-expanded="false"
                                            aria-controls="collapse-1-{{ $i+1 }}">
                                        <span>{{ $qa['q'] }}</span>
                                        <span class="faq-toggle-icon">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="16" fill="#0F898C"/>
                                                <path d="M11 14l5 5 5-5" stroke="#fff" stroke-width="2.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapse-1-{{ $i+1 }}" class="accordion-collapse collapse" aria-labelledby="heading-1-{{ $i+1 }}"
                                     data-bs-parent="#accordion-1">
                                    <div class="accordion-body">
                                        {{ $qa['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-2" role="tabpanel">
                    <div class="accordion faq-accordion" id="accordion-2">
                        @foreach(__('faq.tabs.lawyer.questions') as $i => $qa)
                            <div class="accordion-item" data-question="{{ $qa['q'] }}">
                                <h2 class="accordion-header" id="heading-2-{{ $i+1 }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-2-{{ $i+1 }}" aria-expanded="false"
                                            aria-controls="collapse-2-{{ $i+1 }}">
                                        <span>{{ $qa['q'] }}</span>
                                        <span class="faq-toggle-icon">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="16" fill="#0F898C"/>
                                                <path d="M11 14l5 5 5-5" stroke="#fff" stroke-width="2.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapse-2-{{ $i+1 }}" class="accordion-collapse collapse" aria-labelledby="heading-2-{{ $i+1 }}"
                                     data-bs-parent="#accordion-2">
                                    <div class="accordion-body">
                                        {{ $qa['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3" role="tabpanel">
                    <div class="accordion faq-accordion" id="accordion-3">
                        @foreach(__('faq.tabs.accounting.questions') as $i => $qa)
                            <div class="accordion-item" data-question="{{ $qa['q'] }}">
                                <h2 class="accordion-header" id="heading-3-{{ $i+1 }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-3-{{ $i+1 }}" aria-expanded="false"
                                            aria-controls="collapse-3-{{ $i+1 }}">
                                        <span>{{ $qa['q'] }}</span>
                                        <span class="faq-toggle-icon">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="16" fill="#0F898C"/>
                                                <path d="M11 14l5 5 5-5" stroke="#fff" stroke-width="2.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapse-3-{{ $i+1 }}" class="accordion-collapse collapse" aria-labelledby="heading-3-{{ $i+1 }}"
                                     data-bs-parent="#accordion-3">
                                    <div class="accordion-body">
                                        {{ $qa['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-4" role="tabpanel">
                    <div class="accordion faq-accordion" id="accordion-4">
                        @foreach(__('faq.tabs.translation.questions') as $i => $qa)
                            <div class="accordion-item" data-question="{{ $qa['q'] }}">
                                <h2 class="accordion-header" id="heading-4-{{ $i+1 }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-4-{{ $i+1 }}" aria-expanded="false"
                                            aria-controls="collapse-4-{{ $i+1 }}">
                                        <span>{{ $qa['q'] }}</span>
                                        <span class="faq-toggle-icon">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="16" fill="#0F898C"/>
                                                <path d="M11 14l5 5 5-5" stroke="#fff" stroke-width="2.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapse-4-{{ $i+1 }}" class="accordion-collapse collapse" aria-labelledby="heading-4-{{ $i+1 }}"
                                     data-bs-parent="#accordion-4">
                                    <div class="accordion-body">
                                        {{ $qa['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
