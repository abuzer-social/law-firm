<footer class="footer-section" @if(app()->isLocale('ar')) dir="rtl" @endif>
    <div class="container">
        <!-- Payment Methods Section -->
        <div class="d-block d-md-none text-center">
            <img src="{{asset('assets/images/logo.svg')}}" alt="Defaa Logo">
        </div>
        <div class="row g-4 py-5">
            <div class="col-lg-4">
                <div class="payment-methods justify-content-start">
                    <div class="d-flex align-items-center gap-2 mb-2 justify-content-center">
                        <div class="footer-social">
                            <img src="{{asset('assets/images/visa.svg')}}"
                                 alt="{{ __('footer.payment_methods.visa') }}">
                        </div>
                        <div class="footer-social">
                            <img src="{{asset('assets/images/apple-pay.svg')}}"
                                 alt="{{ __('footer.payment_methods.apple_pay') }}">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="footer-social">
                            <img src="{{asset('assets/images/stc-pay.svg')}}"
                                 alt="{{ __('footer.payment_methods.stc_pay') }}">
                        </div>
                        <div class="footer-social">
                            <img src="{{asset('assets/images/mada.svg')}}"
                                 alt="{{ __('footer.payment_methods.mada') }}">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo Section -->
            <div class="col-lg-4">
                <div class="logo-section d-none d-md-block">
                    <img src="{{asset('assets/images/logo.svg')}}" alt="Defaa Logo">
                </div>
                <!-- Navigation Links -->
                <div class="row">
                    <div class="col-12">
                        <div class="nav-links">
                            <a href="#about">{{ __('footer.links.about') }}</a>
                            <a href="#privacy">{{ __('footer.links.privacy') }}</a>
                            <a href="#terms">{{ __('footer.links.terms') }}</a>
                            <a href="#faq">{{ __('footer.links.faq') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="col-lg-4">
                <div>
                    <div class="payment-methods justify-content-start">
                        <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                            <div class="footer-social">
                                <img src="{{asset('assets/images/linkedin.svg')}}"
                                     alt="{{ __('footer.social.linkedin') }}">
                            </div>
                            <div class="footer-social">
                                <img src="{{asset('assets/images/x.svg')}}" alt="{{ __('footer.social.twitter') }}">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <div class="footer-social">
                                <img src="{{asset('assets/images/insta.svg')}}"
                                     alt="{{ __('footer.social.instagram') }}">
                            </div>
                            <div class="footer-social">
                                <img src="{{asset('assets/images/facebook.svg')}}"
                                     alt="{{ __('footer.social.facebook') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <div class="d-flex align-items-center gap-3 justify-content-center">
                <div class="footer-icon footer-whatsapp-icon">
                    <img src="{{asset('assets/images/footer-w-icon.svg')}}" alt="">
                </div>
                <div class="footer-icon footer-mail-icon">
                    <img src="{{asset('assets/images/footer-mail-icon.svg')}}" alt="">
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row p-4 bottom-footer">
            <div class="col-12">
                <h5 class="copyright">
                    {{ __('footer.copyright') }}
                </h5>
            </div>
        </div>
    </div>
</footer>
