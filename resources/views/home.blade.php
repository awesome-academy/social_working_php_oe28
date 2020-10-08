@extends('layouts.app')

@section('content')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                @auth
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="username-dt">
                                                <div class="usr-pic">
                                                    <img src="{{ config('home.user_pic') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="user-specs">
                                                <h3>{{ Auth::user()->name }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                @endauth
                                <div class="tags-sec full-width">
                                    <ul>
                                        <li><a href="#" title="">{{ trans('home.help_center') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.about') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.privacy_policy') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.community_guidelines') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.cookies_policy') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.career') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.language') }}</a></li>
                                        <li><a href="#" title="">{{ trans('home.copyright_policy') }}</a></li>
                                    </ul>
                                    <div class="cp-sec">
                                        <img src="{{ config('home.logo2') }}" alt="">
                                        <p><img src="{{ config('home.cp') }}" alt="">{{ trans('home.copy') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                    @auth
                                        @if (Auth::user()->role_id === config('home.role_id_employer'))
                                            <div class="post-topbar">
                                                <div class="user-picy">
                                                    <img src="{{ config('home.user_pic') }}" alt="">
                                                </div>
                                                <div class="post-st">
                                                    <ul>
                                                        <li><a class="post-jb active" href="#" title="">{{ trans('home.post_job') }}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                    @endauth
                                <div class="posts-section">
                                    @foreach ($posts as $post)
                                        @if ($post->status !== config('home.pending_status'))
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="{{ config('home.us_pic') }}" alt="">
                                                        <div class="usy-name">
                                                            <h3>{{ @$post->user->name }}</h3>
                                                            <span><img src="{{ config('home.clock') }}" alt="">{{ config('home.minute') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">{{ trans('home.edit_post') }}</a></li>
                                                            <li><a href="#" title="">{{ trans('home.close') }}</a></li>
                                                            <li><a href="#" title="">{{ trans('home.hide') }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>{{ $post->title }}</h3>
                                                    <p>{{ $post->content }}<a href="#" title="">{{ trans('home.view_more') }}</a></p>
                                                    <ul class="skill-tags">
                                                        @foreach ($post->tags as $tag)
                                                            <li><a href="#" title="">{{ $tag->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> {{ trans('home.like') }}</a>
                                                            <img src="{{ config('home.liked') }}" alt="">
                                                        </li>
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> {{ trans('home.comments') }} </a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>{{ trans('home.views') }} </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    <div class="process-comm">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pd-right-none no-pd">
                            <div class="right-sidebar">
                                @auth
                                @else
                                    <div class="widget widget-about">
                                        <img src="{{ config('home.wd_logo') }}" alt="">
                                        <div class="sign_link">
                                            <h3><a href="{{ route('login') }}" title="">{{ trans('home.signup') }}</a></h3>
                                            <a href="#" title="">{{ trans('home.learn_more') }}</a>
                                        </div>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-popup job_post">
                <div class="post-project">
                    <h3>{{ trans('home.post_job') }}</h3>
                    <div class="post-project-fields">
                        <form method="POST" action="{{ route('createPost') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="title" placeholder="{{ trans('home.title') }}">
                                </div>
                                <div class="col-lg-12">
                                    <div class="inp-field">
                                        <select name="tags[]" class="form-control select2" multiple="multiple">
                                            @foreach ($tags as $tag)
                                                <option>{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="content" placeholder="{{ trans('home.content') }}"></textarea>
                                </div>
                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                <div class="col-lg-12">
                                    <ul>
                                        <li><button class="active" type="submit" value="post">{{ trans('home.post') }}</button></li>
                                        <li><a href="{{ route('home') }}" title="">{{ trans('home.cancel') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                </div>
            </div>
        </div>
    </main>
@endsection
