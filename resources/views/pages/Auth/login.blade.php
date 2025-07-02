@extends('layouts.main')
@section('body-class', 'login-page') <!-- This adds the class to body -->

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
                        <form>
                            <div class="">
                                <input type="number" id="phone" class="form-control" name="name" placeholder="{{ __('auth.login.phone') }}">
                            </div>

                            <button type="button" class="fw-bold btn-send-otp">{{ __('auth.login.send_otp') }}</button>

                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="{{ __('auth.login.otp_code') }}" required>
                            </div>

                            <a href="{{route('home.index')}}" type="submit" class="btn btn-login">{{ __('auth.login.submit') }}</a>
                        </form>

                        <div class="signup-link">
                            {{ __('auth.login.no_account') }} <a href="{{ route('signup.page') }}">{{ __('auth.login.signup') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
