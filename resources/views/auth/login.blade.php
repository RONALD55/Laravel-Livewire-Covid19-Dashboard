@extends('layouts.auth')

@section('content')
    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-left">
                        <a href="/login" class="logo-dark">
                            <span><img src="assets/images/xpress/logo-full.png" alt="" height="175"></span>
                        </a>
                    </div>



                    <!-- form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="emailaddress">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  type="email" id="emailaddress" autocomplete="email" autofocus placeholder="Enter your email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted float-right"><small>Forgot your password?</small></a>
                            @endif
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                        </div>
                        <div class="mt-4">
                            <p class="text-muted">Don't have an account? <a href="/register" class="text-muted ml-1"><b>Sign Up</b></a></p>
                        </div>

                        <div>
                            @if (session()->has('error'))

                                <div class="alert alert-danger" role="alert">
                                    <i class="dripicons-warning mr-2"></i>  {{ session('error') }}
                                </div>
                            @endif
                        </div>

                    </form>
                    <!-- end form-->

                    <!-- Footer-->


                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">A COVID-19 TRACKER</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i>The best covid-19 tracking app in the region<i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Designed by Mr Murevi & Team
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->




@endsection



