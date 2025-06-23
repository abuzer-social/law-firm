@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="login-card">
                    <h1 class="login-title">Sign Up</h1>
                    <p class="login-subtitle">
                        By signing up, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms
                            of
                            Use</a>.
                    </p>
                    <form>
                        <div class="form-group">
                            <div class="phone-input-group">
                                <select class="country-code">
                                    <option value="+966">+966</option>
                                    <option value="+1">+1</option>
                                    <option value="+44">+44</option>
                                </select>
                                <input type="tel" class="phone-input" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="OTP Code" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn-login">Sign Up</button>
                    </form>
                    <div class="signup-link">
                        Already have an account? <a href="#">Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 