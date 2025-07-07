@extends('layouts.main')
@section('body-class', 'login-page')

@section('content')
    <div class="d-flex flex-column justify-content-center login-wrapper">
        <div>
            <h1 class="login-title saudi">{{ __('auth.login.title') }}</h1>
            <h5 class="login-subtitle">
                {{ __('auth.login.subtitle') }}
            </h5>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="login-card">
                        <!-- ✅ Correct form method and route -->
                        <form  method="POST" action="{{ route('login.submit') }}">
                            @csrf

                            <!-- Phone Field -->
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">+966</span>
                                    <input
                                        type="tel"
                                        id="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        name="phone"
                                        value="{{ old('phone') }}" {{-- This will only show 9 digits --}}
                                        placeholder="5XXXXXXXX"
                                        maxlength="9"
                                        pattern="[1-9][0-9]{8}"
                                        inputmode="numeric"
                                        required
                                    >
                                </div>
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- OTP Button -->
                            <button type="button" class="fw-bold btn-send-otp btn-loader">
                                {{ __('auth.login.send_otp') }}
                            </button>

                            <!-- OTP Input -->
                            <div class="form-group mt-2 mb-0">
                                <input
                                    type="number"
                                    class="form-control @error('otp') is-invalid @enderror"
                                    name="otp"
                                    value="{{ old('otp') }}"
                                    placeholder="{{ __('auth.login.otp_code') }}"
                                >
                                @error('otp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-login btn-load btn-primary mt-2">
                                {{ __('auth.login.submit') }}
                            </button>
                        </form>

                        <!-- Signup Link -->
                        <div class="signup-link mt-3">
                            {{ __('auth.login.no_account') }}
                            <a href="{{ route('signup.page') }}">{{ __('auth.login.signup') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
