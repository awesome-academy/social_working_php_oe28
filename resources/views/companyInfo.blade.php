@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <section class="cover-sec">
            <img src="{{ asset(config('companyInfo.company_cover')) }}" alt="">
        </section>
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="main-left-sidebar">
                                    <div class="user_profile">
                                        <div class="user-pro-img">
                                            <img src="{{ asset(config('companyInfo.company_profile')) }}" alt="">
                                        </div>
                                        <div class="user_pro_status">
                                            <ul class="flw-hr">
                                                <li><a href="#" title="" class="flww"><i class="la la-plus"></i> {{ trans('companyInfo.follow') }}</a></li>
                                            </ul>
                                            <ul class="flw-status">
                                                <li>
                                                    <span>{{ trans('companyInfo.following') }}</span>
                                                    <b>{{ trans('companyInfo.number') }}</b>
                                                </li>
                                                <li>
                                                    <span>{{ trans('companyInfo.follower') }}</span>
                                                    <b>{{ trans('companyInfo.number') }}</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="social_links">
                                            <li><a href="#" title=""><i class="fa fa-facebook-square"></i> {{ trans('companyInfo.facebook') }}</a></li>
                                            <li><a href="#" title=""><i class="fa fa-twitter"></i> {{ trans('companyInfo.twitter') }}</a></li>
                                            <li><a href="#" title=""><i class="fa fa-google-plus-square"></i> {{ trans('companyInfo.google_plus') }}</a></li>
                                            <li><a href="#" title=""><i class="fa fa-behance-square"></i> {{ trans('companyInfo.behance') }}</a></li>
                                            <li><a href="#" title=""><i class="fa fa-pinterest"></i> {{ trans('companyInfo.pinterest') }}</a></li>
                                            <li><a href="#" title=""><i class="fa fa-instagram"></i> {{ trans('companyInfo.instagram') }}</a></li>
                                            <li><a href="#" title=""><i class="fa fa-youtube"></i> {{ trans('companyInfo.youtube') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    <div class="user-tab-sec">
                                        <h3>{{ $company->name }}</h3>
                                        <div class="star-descp">
                                            <span>{{ trans('companyInfo.establish') }}</span>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="tab-feed">
                                            <ul>
                                                <li data-tab="info-dd" class="active">
                                                    <a href="#" title="">
                                                        <img src="{{ asset(config('companyInfo.ic2')) }}" alt="">
                                                        <span>{{ trans('companyInfo.info') }}</span>
                                                    </a>
                                                </li>
                                                <li data-tab="portfolio-dd">
                                                    <a href="#" title="">
                                                        <img src="{{ asset(config('companyInfo.ic3')) }}" alt="">
                                                        <span>{{ trans('companyInfo.portfolio') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab current" id="info-dd">
                                        <div class="user-profile-ov">
                                            <h3><a href="#" title="" class="overview-open">{{ trans('companyInfo.overview') }}</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
                                            <p>{{ $company->overview }}</p>
                                        </div>
                                        <div class="user-profile-ov st2">
                                            <h3><a href="#" title="" class="esp-bx-open">{{ trans('companyInfo.since') }}</a><a href="#" title="" class="esp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="esp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
                                            <span>{{ $company->establish }}</span>
                                        </div>
                                        <div class="user-profile-ov">
                                            <h3><a href="#" title="" class="emp-open">{{ trans('companyInfo.total_employees') }}</a> <a href="#" title="" class="emp-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="emp-open"><i class="fa fa-plus-square"></i></a></h3>
                                            <span>{{ $company->employees }}</span>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab" id="portfolio-dd">
                                        <div class="portfolio-gallery-sec">
                                            <h3>{{ trans('companyInfo.portfolio') }}</h3>
                                            <div class="gallery_pf">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img1')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img2')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img3')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img4')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img5')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img6')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img7')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img8')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img9')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="{{ asset(config('companyInfo.pf-img10')) }}" alt="">
                                                            <a href="#" title=""><img src="{{ asset(config('companyInfo.all-out')) }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-sidebar">
                                    <div class="message-btn">
                                        <a href="#" title=""><i class="fa fa-envelope"></i> {{ trans('companyInfo.message') }}</a>
                                    </div>
                                    <div class="widget widget-portfolio">
                                        <div class="wd-heady">
                                            <h3>{{ trans('companyInfo.portfolio') }}</h3>
                                            <img src="{{ asset(config('companyInfo.photo-icon')) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <footer>
            <div class="footy-sec mn no-margin">
                <div class="container">
                    <ul>
                        <li><a href="#" title="">{{ trans('companyInfo.help_center') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.about') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.privacy_policy') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.community_guidelines') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.cookies_policy') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.career') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.language') }}</a></li>
                        <li><a href="#" title="">{{ trans('companyInfo.copyright_policy') }}</a></li>
                    </ul>
                    <p><img src="{{ asset(config('companyInfo.copy-icon2')) }}" alt="">{{ trans('companyInfo.copy') }}</p>
                    <img class="fl-rgt" src="{{ asset(config('companyInfo.logo2')) }}" alt="">
                </div>
            </div>
        </footer>
    </div>
@endsection
