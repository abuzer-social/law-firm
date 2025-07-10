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
                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login.submit') }}" id="loginForm">
                            @csrf

                            <!-- Phone Field -->


                            <div class="mb-2">
                                <div class="input-group" dir="ltr">
                                    <span class="input-group-text">+966</span>
                                    <input
                                        dir="ltr"
                                        type="tel"
                                        id="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        name="phone"
                                        value="{{ old('phone') }}"
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
                            <button type="button" class="fw-bold btn-send-otp btn-loader" id="sendOtpBtn">
                                {{ __('auth.login.send_otp') }}
                            </button>

                            <!-- OTP Verification Section (Initially Hidden) -->
                            <div id="otpVerificationSection" class="d-none">
                                <div class="verification-message text-center mb-3">
                                    {{ __('auth.login.verification_sent') }} <span id="maskedPhone"></span>
                                </div>

                                <div class="otp-input-group mb-3">
                                    <input type="number" class="otp-input" maxlength="1" data-index="1"
                                           inputmode="numeric" autocomplete="off">
                                    <input type="number" class="otp-input" maxlength="1" data-index="2"
                                           inputmode="numeric" autocomplete="off">
                                    <input type="number" class="otp-input" maxlength="1" data-index="3"
                                           inputmode="numeric" autocomplete="off">
                                    <input type="number" class="otp-input" maxlength="1" data-index="4"
                                           inputmode="numeric" autocomplete="off">
                                    <input type="hidden" name="otp" id="fullOtp">
                                </div>
                                <!-- Inline OTP Error -->
                                <div id="otpError" class="text-danger text-center mb-3 d-none">
                                    {{-- Error message will be inserted here by JavaScript --}}
                                </div>

                                <button type="button" id="verifyOtpBtn" class="btn btn-login btn-primary w-100"
                                        disabled>
                                    {{ __('auth.login.verify') }}
                                </button>
                            </div>

                            <!-- Submit Button (Initially Hidden) -->
                            <button type="submit" class="btn btn-login btn-primary mt-2 d-none" id="submitFormBtn">
                                {{ __('auth.login.submit') }}
                            </button>
                        </form>

                        <!-- Signup Link -->
                        <div class="signup-link mt-3">

                            <a href="{{ route('signup.page') }}"><span
                                    class="d-text-gray">{{ __('auth.login.no_account') }}</span> {{ __('auth.login.signup') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function () {
            const phoneInput = $('#phone');
            const sendOtpBtn = $('#sendOtpBtn');
            const otpVerificationSection = $('#otpVerificationSection');
            const maskedPhone = $('#maskedPhone');
            const isRTL = $('html').attr('dir') === 'rtl' || $('body').hasClass('rtl');

            // Initialize OTP inputs
            $('.otp-input').each(function() {
                $(this).attr('inputmode', 'numeric')
                    .attr('pattern', '[0-9]*');
            });

            // ========================
            // 1. Send OTP Functionality
            // ========================
            sendOtpBtn.on('click', function () {
                const phone = phoneInput.val().trim();

                // Validate phone
                if (!phone || phone.length !== 9 || !/^[1-9][0-9]{8}$/.test(phone)) {
                    phoneInput.addClass('is-invalid');
                    return;
                }

                // Show loading state
                const $btn = $(this);
                $btn.prop('disabled', true);
                $btn.html(
                    `<span class="spinner-border spinner-border-sm"></span> ${
                        isRTL ? '...جاري الإرسال' : 'Sending...'
                    }`
                );

                // AJAX call to send OTP
                $.ajax({
                    url: '{{ route("send.otp") }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    data: { phone: phone },
                    success: (response) => {
                        if (response.success) {
                            // Mask phone (05xxxxx89)
                            maskedPhone.text(phone.substring(0, 2) + 'xxxxx' + phone.substring(7));

                            // Show OTP section
                            $btn.addClass('d-none');
                            otpVerificationSection.removeClass('d-none');
                            $('.otp-input[data-index="1"]').focus();
                        }
                    },
                    error: (xhr) => {
                        alert(isRTL ? 'فشل إرسال الرمز' : 'Failed to send OTP');
                    },
                    complete: () => {
                        $btn.prop('disabled', false)
                            .html('{{ __("auth.login.send_otp") }}');
                    }
                });
            });

            // ========================
            // 2. OTP Input Handling
            // ========================
            $(document).on('input', '.otp-input', function () {
                // Sanitize input
                $(this).val($(this).val().replace(/\D/g, '').slice(0, 1));

                const index = parseInt($(this).data('index'));
                if ($(this).val().length === 1 && index < 4) {
                    $(`.otp-input[data-index="${index + 1}"]`).focus();
                }

                updateFullOtp();

                // Auto-verify if 4 digits entered (moved here from updateFullOtp)
                const fullOtp = $('#fullOtp').val();
                if (fullOtp.length === 4) {
                    verifyOtp();
                }
            });

            $(document).on('keydown', '.otp-input', function (e) {
                const index = parseInt($(this).data('index'));
                if (e.key === 'Backspace' && $(this).val() === '' && index > 1) {
                    $(`.otp-input[data-index="${index - 1}"]`).focus();
                }
            });

            $(document).on('paste', '.otp-input', function (e) {
                e.preventDefault();
                const pasteData = e.originalEvent.clipboardData.getData('text');
                const otpDigits = pasteData.replace(/\D/g, '').substring(0, 4).split('');

                if (otpDigits.length === 4) {
                    otpDigits.forEach((digit, i) => {
                        $(`.otp-input[data-index="${i + 1}"]`).val(digit).trigger('input');
                    });
                }
            });

            // ========================
            // 3. OTP Verification
            // ========================
            function updateFullOtp() {
                let fullOtp = '';
                $('.otp-input').each(function () {
                    fullOtp += $(this).val();
                });

                $('#fullOtp').val(fullOtp);
                $('#verifyOtpBtn').prop('disabled', fullOtp.length !== 4);
            }

            function verifyOtp() {
                const fullOtp = $('#fullOtp').val();
                const phone = $('#phone').val();

                // Show loading
                const $btn = $('#verifyOtpBtn');
                $btn.prop('disabled', true)
                    .html(`<span class="spinner-border spinner-border-sm"></span> ${
                        isRTL ? '...جاري التحقق' : 'Verifying...'
                    }`);

                $('#otpError').addClass('d-none');

                // Verify via AJAX
                $.ajax({
                    url: '{{ route("verify.otp") }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify({
                        phone: phone,
                        otp: fullOtp
                    }),
                    success: (response) => {
                        if (response.success) {
                            // Show success message
                            $('#otpError').removeClass('d-none text-danger')
                                .addClass('text-success')
                                .text(isRTL ? 'تم التحقق بنجاح!' : 'Verified successfully!');

                            // Submit the form after a short delay
                            setTimeout(() => {
                                $('#loginForm').submit();
                            }, 1500);
                        } else {
                            showOtpError(isRTL ? 'رمز التحقق غير صحيح' : 'Invalid OTP');
                        }
                    },
                    error: (xhr) => {
                        showOtpError(
                            xhr.responseJSON?.message ||
                            (isRTL ? 'حدث خطأ' : 'An error occurred')
                        );
                    },
                    complete: () => {
                        $btn.prop('disabled', false)
                            .html('{{ __("auth.login.verify") }}');
                    }
                });
            }

            function showOtpError(message) {
                $('#otpError').text(message).removeClass('d-none');
                $('.otp-input').val('');
                $('.otp-input[data-index="1"]').focus();
                updateFullOtp();
            }

            $('#verifyOtpBtn').on('click', verifyOtp);
        });
    </script>
@endpush
