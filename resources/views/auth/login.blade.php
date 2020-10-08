<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ trans('signin.social_working') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('/bower/bower_components/demo-bower/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/responsive.css') }}">
</head>


<body class="sign-in" oncontextmenu="return false;">
@include('sweetalert::alert')
<div class="wrapper">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="{{ config('imgaes.cm_logo') }}" alt="">
                            </div>
                            <img src="{{ config('images.cm_main') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current"><a href="#" title="">{{ trans('signin.sign_in') }}</a></li>
                                <li data-tab="tab-2"><a href="" title="">{{ trans('signin.sign_up') }}</a></li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">

                                <h3>{{ trans('signin.sign_in') }}</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                                <i class="la la-user"></i>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input placeholder="{{ trans('signin.password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                <i class="la la-lock"></i>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 no-pdd">
                                            <div class="checky-sec">
                                                <div class="fgt-sec">
                                                    <input id="c1" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="c1">
                                                        <span></span>
                                                    </label>
                                                    <label class="form-check-label" for="remember">
                                                        <small>{{ trans('signin.remember_me') }}</small>
                                                    </label>

                                                </div>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ trans('signin.forgot_password') }}
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">{{ trans('signin.sign_in') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="sign_in_sec" id="tab-2">
                                <div class="signup-tab">
                                    <i class="fa fa-long-arrow-left"></i>
                                    <h2>{{ config('login.email_example') }}</h2>
                                    <ul>
                                        <li data-tab="tab-3" class="current"><a href="#" title="">{{ trans('signin.user') }}</a></li>
                                        <li data-tab="tab-4"><a href="#" title="">{{ trans('signin.company') }}</a></li>
                                    </ul>
                                </div>
                                <div class="dff-tab current" id="tab-3">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input
                                                        id="name"
                                                        type="text"
                                                        class="form-control @error ('name') is-invalid @enderror"
                                                        name="name"
                                                        value="{{ old('name') }}"
                                                        required
                                                        autocomplete="name"
                                                        autofocus
                                                        placeholder="{{ trans('signin.user_name') }}"
                                                    >
                                                    <i class="la la-user"></i>
                                                    @error ('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input
                                                        id="email"
                                                        type="email"
                                                        class="form-control @error ('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}"
                                                        required
                                                        autocomplete="email"
                                                        placeholder="{{ trans('signin.email') }}"
                                                    >
                                                    <i class="la la-user"></i>
                                                    @error ('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input
                                                        id="password"
                                                        type="password"
                                                        class="form-control @error ('password') is-invalid @enderror"
                                                        name="password"
                                                        value=""
                                                        required
                                                        autocomplete="new-password"
                                                        placeholder="{{ trans('signin.password') }}"
                                                    >
                                                    <i class="la la-lock"></i>
                                                    @error ('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input
                                                        id="password-confirm"
                                                        type="password"
                                                        class="form-control"
                                                        name="password_confirmation"
                                                        required
                                                        autocomplete="new-password"
                                                        placeholder="{{ trans('signin.repeat_password') }}"
                                                    >
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">{{ trans('signin.get_started') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="dff-tab" id="tab-4">
                                    <form method="POST" action="{{ route('registerEmployer') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="company_name" placeholder="{{ trans('signin.company_name') }}">
                                                    <i class="la la-building"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="email" placeholder="{{ trans('signin.email') }}">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" name="name" placeholder="{{ trans('signin.name') }}">
                                                    <i class="la la-globe"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="password" placeholder="{{ trans('signin.password') }}">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="repeat_password" placeholder="{{ trans('signin.repeat_password') }}">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">{{ trans('signin.get_started') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('/bower_components/demo-bower/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/demo-bower/assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/demo-bower/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/demo-bower/assets/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/demo-bower/assets/js/script.js') }}"></script>
</body>

</html>
