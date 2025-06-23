@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ __('home.Welcome to the homepage') }}</h1>

        <form action="{{ route('submit') }}" method="POST">
            @csrf
            <input type="text" name="username" value="{{ old('username') }}" placeholder="{{ __('home.Enter your name') }}">
            @error('username')
            <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">{{ __('home.Submit') }}</button>
        </form>
    </div>
@endsection
