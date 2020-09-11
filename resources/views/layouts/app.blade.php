<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/line-awesome-font-awesome.min.css">
    <link href="/bower_components/demo-bower/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/demo-bower/assets/css/responsive.css">
    <title>Document</title>
</head>
<body oncontextmenu="return false;" >
    <div id="">
        <div id="app">
            <header>
                <div class="container">
                    <div class="header-data">
                        <div class="logo">
                            <a href="index.html" title=""><img src="/bower_components/demo-bower/assets/images/logo.png" alt=""></a>
                        </div>
                        <div class="search-bar">
                            <form>
                                <input type="text" name="search" placeholder="Search...">
                                <button type="submit"><i class="la la-search"></i></button>
                            </form>
                        </div>
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html" title="">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon1.png" alt=""></span>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="companies.html" title="">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon2.png" alt=""></span>
                                        Companies
                                    </a>
                                    <ul>
                                        <li><a href="companies.html" title="">Companies</a></li>
                                        <li><a href="company-profile.html" title="">Company Profile</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="projects.html" title="">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon3.png" alt=""></span>
                                        Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="profiles.html" title="">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon4.png" alt=""></span>
                                        Profiles
                                    </a>
                                    <ul>
                                        <li><a href="user-profile.html" title="">User Profile</a></li>
                                        <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="jobs.html" title="">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon5.png" alt=""></span>
                                        Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="" class="not-box-openm">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon6.png" alt=""></span>
                                        Messages
                                    </a>
                                    <div class="notification-box msg" id="message">
                                        <div class="nt-title">
                                            <h4>Setting</h4>
                                            <a href="#" title="">Clear all</a>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img1.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img2.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img3.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="view-all-nots">
                                                <a href="messages.html" title="">View All Messsages</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" title="" class="not-box-open">
                                        <span><img src="/bower_components/demo-bower/assets/images/icon7.png" alt=""></span>
                                        Notification
                                    </a>
                                    <div class="notification-box noti" id="notification">
                                        <div class="nt-title">
                                            <h4>Setting</h4>
                                            <a href="#" title="">Clear all</a>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img1.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img2.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img3.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="notfication-details">
                                                <div class="noty-user-img">
                                                    <img src="/bower_components/demo-bower/assets/images/resources/ny-img2.png" alt="">
                                                </div>
                                                <div class="notification-info">
                                                    <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                    <span>2 min ago</span>
                                                </div>
                                            </div>
                                            <div class="view-all-nots">
                                                <a href="#" title="">View All Notification</a>
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
                                <div class="d-flex">
                                    @guest
                                        <div class="not-box-openm">
                                            <a class="nav-link" href="{{ route('login') }}">{{ trans('navbar.login')}}</a>
                                        </div>
                                        @if (Route::has('register'))
                                            <div class="not-box-openm">
                                                <a class="nav-link" href="{{ route('register') }}">{{ trans('navbar.register') }}</a>
                                            </div>
                                        @endif
                                    @else
                                </div>

                                @auth
                                <img src="/bower_components/demo-bower/assets/images/resources/user.png" alt="">
                                <a href="#" title="">

                                    {{ Auth::user()->name }}
                                    @else
                                        <button>Signin</button>
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
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script type="text/javascript" src="/bower_components/demo-bower/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/demo-bower/assets/js/popper.js"></script>
    <script type="text/javascript" src="/bower_components/demo-bower/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bower_components/demo-bower/assets/js/flatpickr.min.js"></script>
    <script type="text/javascript" src="/bower_components/demo-bower/assets/lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="/bower_components/demo-bower/assets/js/script.js"></script>
    <script>
        document.querySelector('#btn-logout').onclick = function () {
            document.querySelector('#logout-form').submit();
        }
    </script>
</body>
</html>
