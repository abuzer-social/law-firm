@extends('layouts.main')

@section('content')
    <div class="container-fluid home-header-container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="d-flex align-items-end gap-3">
                    <div>
                        <img class="max-100" src="{{asset('assets/images/homepage-pattern.svg')}}" alt="">
                    </div>
                    <div>
                        <img class="fit-content" src="{{asset('assets/images/divider.svg')}}" alt="">
                    </div>
                </div>

            </div>
            <div class="col-lg-7">
                <div>
                    <h1 class="fw-bold pb-4">
                        Defaa
                    </h1>
                    <h4 class="primary fw-semibold pb-3">
                        Your First Choice
                    </h4>
                    <p class="fw-semibold home-header-desc">
                        Your legal rights deserve a true partnership with a team that understands your concerns, values
                        your time, and respects your
                        intelligence. We offer you smart legal solutions through an advanced platform that saves you
                        time and gives you peace of mind every step of the way. Because every case matters to us, and
                        every client deserves exceptional service.
                    </p>
                    <div class="mt-3">
                        <button class="btn btn-primary btn-lg fw-bold d-flex align-items-center gap-3 rounded-4 px-4">
                            Start with us <img src="{{asset('assets/images/arrow-right.svg')}}" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-services-section">
        <div class="text-center pb-5 ">
            <h1 class="fw-bold">
                A New Vision for Legal Services
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center"><img src="{{asset('assets/images/service-card-1.svg')}}" alt=""></div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center"><img src="{{asset('assets/images/service-card-2.svg')}}" alt=""></div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center"><img src="{{asset('assets/images/service-card-3.svg')}}" alt=""></div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center"><img src="{{asset('assets/images/service-card-4.svg')}}" alt=""></div>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="col-lg-3">
                        <div class="text-center"><img src="{{asset('assets/images/service-card-5.svg')}}" alt=""></div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-lg-3">
                        <div class="text-center"><img src="{{asset('assets/images/service-card-6.svg')}}" alt=""></div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-lg-3">
                        <div class="text-center"><img src="{{asset('assets/images/service-card-7.svg')}}" alt=""></div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
    <section class="detail-section-container">
        <div class="pb-5 text-center">
            <h1 class="fw-bold">
                <span class="primary">Defaa’s</span> Strength Lies in the Details
            </h1>
        </div>
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-4">
                    <div class="card detail-card">
                        <div class="card-body text-center">
                            <div class="pb-3">
                                <img src="{{asset('assets/images/detail-icon-1.svg')}}" alt="">
                            </div>
                            <h5 class="fw-semibold pb-3" style="color: #80C343">
                                Track your Balance
                            </h5>
                            <p>
                                and requests through your account.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card detail-card">
                        <div class="card-body text-center">
                            <div class="pb-3">
                                <img src="{{asset('assets/images/detail-icon-2.svg')}}" alt="">
                            </div>
                            <h5 class="fw-semibold pb-3" style="color: #6CA6D1">
                                Monitor the status of your requests online
                            </h5>
                            <p>
                                Track your requests through your account
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card detail-card">
                        <div class="card-body text-center">
                            <div class="pb-3">
                                <img src="{{asset('assets/images/detail-icon-3.svg')}}" alt="">
                            </div>
                            <h5 class="fw-semibold pb-3" style="color: #37A592">
                                Ease of Subscription
                            </h5>
                            <p>
                                Enjoy instant access to our services upon subscription.
                            </p>
                        </div>
                    </div>
                </div>
                <img class="detail-upper-pattern" src="{{asset('assets/images/dotted-pattern.png')}}" alt="">
            </div>
        </div>
        <img class="detail-lower-pattern" src="{{asset('assets/images/dotted-pattern.png')}}" alt="">
    </section>
    <section class="solution-sections py-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold primary">All Solutions in One Platform</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container lawyer">
                                <img src="{{asset('assets/images/solution-icon-1.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">Ask a Lawyer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container language">
                                <img src="{{asset('assets/images/solution-icon-2.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">Translation Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container accounting">
                                <img src="{{asset('assets/images/solution-icon-3.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">Accounting Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container contracts">
                                <img src="{{asset('assets/images/solution-icon-4.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">Contracts and Documents</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card solution-card">
                        <div class="card-body">
                            <div class="solution-icon-container legal">
                                <img src="{{asset('assets/images/solution-icon-5.svg')}}" alt="">
                            </div>
                            <div>
                                <a href="">Legal Plans</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container registering-section">
        <div class="text-white">
            <h2 class="fw-bold pb-3">
                Do you think of registering
            </h2>
            <h5 class="fw-bold">
                Let us handle your legal concerns—get solutions with just one click.
            </h5>
        </div>
    </section>
@endsection
