@extends('layouts.main')

@section('content')
<div class="container margin-top">
    <div class="padding-top">
        <div class="text-center header max-50 m-auto" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
            <h2 class="saudi pb-4 primary"></h2>
        </div>
        <div class="mt-4">
            <p>
                <!-- Add your FAQ content here -->
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.
            </p>
        </div>
    </div>
</div>
@endsection
