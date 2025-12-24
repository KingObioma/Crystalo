@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Authenticate || Crystalo
@endsection
@section('title1')
    Account Access
@endsection
@section('title2')
    Unlock Your Potential With Us
@endsection
@section('title3')
    Authenticate
@endsection
@include('frontend.home.breadcrumb')
<!--Start login register area-->
<section class="login-register-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="form">
                    <div class="shop-page-title">
                        <div class="title">Login <span>Now</span></div>
                    </div>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="col-xl-12">
                                <div class="input-field">
                                    <input class="mb-0" type="text" id="email" name="email"
                                        placeholder="Enter Email" value="{{ old('email') }}" required
                                        autocomplete="username">
                                    <div class="icon-holder">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-0 text-danger" />
                            </div>

                            <!-- Password -->
                            <div class="col-xl-12">
                                <div class="input-field">
                                    <input class="mb-0 mt-4" type="text" id="password" name="password"
                                        placeholder="Enter Password" required autocomplete="current-password">
                                    <div class="icon-holder">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mb-2 text-danger" />
                            </div>

                            <!-- Submit Button -->
                            <div class="col-xl-12">
                                <div class="row mt-4">
                                    <div class="col-xl-6 col-lg-6 col-sm-12">
                                        <button class="btn-one" type="submit">Login Now</button>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-sm-12">
                                        <ul class="social-icon">
                                            <li class="login-with">Or login with</li>
                                            <li><a href="{{ route('auth', 'facebook') }}"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="{{ route('auth', 'twitter') }}"><i
                                                        class="fa fa-twitter twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="{{ route('auth', 'google') }}"><i
                                                        class="fa fa-google-plus gplus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-sm-12">
                                        <div class="remember-text">
                                            <div class="checkbox">
                                                <label>
                                                    <input id="remember_me" type="checkbox" name="remember">
                                                    <span>Remember Me</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-xl-6 col-lg-6 col-sm-12">
                                        <div class="remember-text">
                                            <div class="checkbox">
                                                <label>
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}"
                                                            class="forgot-password" style="color: black">
                                                            Forgot your password?
                                                        </a>
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="form register">
                    <div class="shop-page-title">
                        <div class="title">Register <span>Here</span></div>
                    </div>
                    <div class="row">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input class="mb-0" type="text" id="name" name="name"
                                        placeholder="Your Name">
                                    <div class="icon-holder">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->register->get('name')" class="mt-0 text-danger" />
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input class="mb-0 mt-4" type="text" id="email" name="email"
                                        placeholder="Enter Email">
                                    <div class="icon-holder">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->register->get('email')" class="mt-0 text-danger" />
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input class="mb-0 mt-4" type="text" name="password" id="password"
                                        placeholder="Enter Password">
                                    <div class="icon-holder">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->register->get('password')" class="mt-0 text-danger" />

                            </div>
                            <div class="col-md-12">
                                <div class="row mt-4" style="justify-content: space-between">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <button class="btn-one" type="submit">Register Here</button>
                                    </div>
                                    <div class="col-xl-6 col-lg-7 col-sm-12">
                                        <ul class="social-icon">
                                            <li class="login-with">Or Enroll with</li>
                                            <li><a href="{{ route('auth', 'facebook') }}"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="{{ route('auth', 'twitter') }}"><i
                                                        class="fa fa-twitter twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="{{ route('auth', 'google') }}"><i
                                                        class="fa fa-google-plus gplus" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End login register area-->
@endsection
