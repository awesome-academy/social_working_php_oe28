<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('bower_components/demo-bower/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <title></title>
</head>
<body oncontextmenu="return false;" >
    <div id="">
        <div id="app">
            <header>
                <div class="container">
                    <div class="header-data">
                        <div class="logo">
                            <a href="" title=""><img src="{{ config('icon.logo') }}" alt=""></a>
                        </div>
                        <div class="search-bar">
                            <form>
                                <input id="inputSearchCompany" type="text" name="search" placeholder="{{ trans('navbar.search') }}...">
                                <button type="submit"><i class="la la-search"></i></button>
                            </form>
                            <div id="resultSearch"></div>
                        </div>
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" title="">
                                        <span><img src="{{ config('icon.icon1') }}" alt=""></span>
                                        {{ trans('navbar.home') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        <span><img src="{{ config('icon.icon2') }}" alt=""></span>
                                        {{ trans('navbar.companies') }}
                                    </a>
                                    <ul>
                                        <li><a href="" title="">{{ trans('navbar.companies') }}</a></li>
                                        <li><a href="" title="">{{ trans('navbar.company_profile') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" title="">
                                        <span><img src="{{ config('icon.icon4') }}" alt=""></span>
                                        {{ trans('navbar.profiles') }}
                                    </a>
                                    <ul>
                                        <li><a href="" title="">{{ trans('navbar.user_profile') }}</a></li>
                                        <li><a href="" title="">{{ trans('navbar.my_profile_feed') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" title="">
                                        <span><img src="{{ config('icon.icon5') }}" alt=""></span>
                                        {{ trans('navbar.jobs') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="" class="not-box-openm">
                                        <span><img src="{{ config('icon.icon6') }}" alt=""></span>
                                        {{ trans('navbar.messages') }}
                                    </a>
                                    <div class="notification-box msg" id="message">
                                        <div class="nt-title">
                                            <h4>{{ trans('navbar.settings') }}</h4>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img1') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="" title="">{{ trans('') }}</a> </h3>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img2') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="" title="">{{ trans('') }}</a></h3>

                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img3') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="" title="">{{ trans('') }}</a></h3>

                                                </div>
                                            </div>
                                            <div class="view-all-nots">
                                                <a href="" title="">{{ trans('') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="" class="not-box-open">
                                        <span><img src="{{ config('icon.icon7') }}" alt=""></span>
                                        {{ trans('navbar.settings') }}
                                    </a>
                                    <div class="notification-box noti" id="notification">
                                        <div class="nt-title">
                                            <h4>{{ trans('') }}</h4>
                                            <a href="#" title="">{{ trans('') }}</a>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img1') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">{{ trans('') }}</a> {{ trans('') }}</h3>
                                                    <span>{{ trans('') }}</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img2') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">{{ trans('') }}</a> {{ trans('') }}</h3>
                                                    <span>{{ trans('') }}</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img3') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">{{ trans('') }}</a> {{ trans('') }}</h3>
                                                    <span>{{ trans('') }}</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="{{ config('images.ny_img2') }}" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">{{ trans('') }}</a> {{ trans('') }}</h3>
                                                    <span>{{ trans('') }}</span>
                                                </div>
                                            </div>
                                            <div class="view-all-nots">
                                                <a href="#" title="">{{ trans('') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <div class="menu-btn">
                            <a href="#" title=""><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="user-account">
                            <div class="user-info">
                                @guest
                                    <div class="not-box-openm">
                                        <a class="nav-link" href="{{ route('login') }}">{{ trans('navbar.login')}}</a>
                                    </div>
                                @else
                                    @auth
                                        <img src="{{ config('images.user') }}" alt="">
                                        <a href="#" title="">

                                            {{ Auth::user()->name }}
                                            @else
                                                <button>{{ trans('sigin.sigin') }}</button>
                                            @endauth
                                        </a>
                                        <i class="la la-sort-down"></i>
                            </div>
                            <div class="user-account-settingss">
                                <h3 class="tc">
                                    <a id="btn-logout"
                                       class="dropdown-item" href="#">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @endguest
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="py-4">
                @yield('content')
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{ asset('bower_components/demo-bower/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/demo-bower/assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/demo-bower/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/demo-bower/assets/js/flatpickr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/demo-bower/assets/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/demo-bower/assets/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/aos/dist/aos.js') }}"></script>
    <script>
        const companyInfoRoute = "{{ route('companyInfo', ['id' => 'companyId']) }}";
    </script>
<script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
