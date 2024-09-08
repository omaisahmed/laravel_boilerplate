<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Head -->
@include('layouts.partials.head')
<!-- End Head -->
<body>
    <!-- Page Container -->
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="row g-0 justify-content-center bg-body-dark">
                <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                    <!-- Sign In Block -->
                    <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                        <div
                            class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                            <!-- Header -->
                            <div class="mb-2 text-center">
                                <a class="link-fx fw-bold fs-1">
                                    <span class="text-dark">Dashboard</span>
                                </a>
                                <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <div class="input-group input-group-lg">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            placeholder="Email Address" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-open"></i>
                                        </span>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group input-group-lg">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Password" required autocomplete="current-password">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div
                                    class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="login-remember-me">Remember Me</label>
                                    </div>
                                    {{-- @if (Route::has('password.request'))
                        <div class="fw-semibold fs-sm py-1">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        @endif --}}
                                </div>
                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-hero btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                    </button>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                    <!-- END Sign In Block -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</body>

</html>
