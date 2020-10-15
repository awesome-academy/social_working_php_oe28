<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/ico" href="{{ asset('/bower_components/bower-assets-admin/images/favicon.ico') }}" />
    <link href="{{ asset('/bower_components/bower-assets-admin/css/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/bower_components/demo-bower/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/css/vendor/animate/animate.min.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/mmenu/css/jquery.mmenu.all.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/videobackground/css/jquery.videobackground.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/css/vendor/bootstrap-checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/rickshaw/css/rickshaw.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/morris/css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/tabdrop/css/tabdrop.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/summernote/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/summernote/css/summernote-bs3.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/chosen/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/bower-assets-admin/js/vendor/chosen/css/chosen-bootstrap.css') }}">
    <link href="{{ asset('/bower_components/bower-assets-admin/css/minimal.css') }}" rel="stylesheet">
</head>

<body class="bg-1">
    <div id="wrap">
        <div class="row">
            <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top collapsed" role="navigation" id="navbar">
                <div class="navbar-header col-md-2">
                    <a class="navbar-brand" href="#">
                        <strong>{{ trans('adminApp.social') }}</strong>{{ trans('adminApp.working') }}
                    </a>
                    <div class="sidebar-collapse">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse">
                    <ul class="nav navbar-nav quick-actions">
                        <li class="dropdown divided user" id="current-user">
                            <div class="profile-photo">
                                <img src="{{ asset(config('admin.profile-photo')) }}" alt />
                            </div>
                            <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                                {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu arrow settings">
                                <li>
                                    <a id="button-logout" href="#"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#mmenu"><i class="fa fa-comments"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav side-nav" id="sidebar">

                        <li class="collapsed-content">
                            <ul>
                                <li class="search"></li>
                            </ul>
                        </li>
                        <li class="navigation" id="navigation">
                            <a href="#" class="sidebar-toggle" data-toggle="#navigation">{{ trans('adminApp.navigation') }} <i class="fa fa-angle-up"></i></a>

                            <ul class="menu">

                                <li class="active">
                                    <a href="{{ route('pendingPosts') }}">
                                        <i class="fa fa-pencil"></i> {{ trans('adminApp.post') }} <b class="fa fa-plus dropdown-plus"></b>
                                    </a>
                                    <a href="{{ route('userManagement') }}">
                                        <i class="fa fa-user"></i> {{ trans('adminApp.user') }} <b class="fa fa-plus dropdown-plus"></b>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content" class="col-md-12">
                <div class="tile-body no-vpadding">
                    @include('sweetalert::alert')
                    @yield('content')
                </div>
            </div>
        </div>
        <div id="mmenu" class="right-panel">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#mmenu-users" data-toggle="tab"><i class="fa fa-users"></i></a></li>
                <li class=""><a href="#mmenu-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
                <li class=""><a href="#mmenu-friends" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
                <li class=""><a href="#mmenu-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('/bower_components/demo-bower/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/bower-assets-admin/js/vendor/mmenu/js/jquery.mmenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/bower-assets-admin/js/vendor/sparkline/jquery.sparkline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/bower-assets-admin/js/vendor/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/bower-assets-admin/js/vendor/animate-numbers/jquery.animateNumbers.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/bower-assets-admin/js/vendor/videobackground/jquery.videobackground.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/bower-assets-admin/js/vendor/blockui/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/flot/jquery.flot.selection.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/flot/jquery.flot.animator.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/flot/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/easypiechart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/rickshaw/raphael-min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/rickshaw/d3.v2.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/morris/morris.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/tabdrop/bootstrap-tabdrop.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/vendor/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('/bower_components/bower-assets-admin/js/minimal.min.js') }}"></script>
    @stack('after-js')
</body>
</html>

