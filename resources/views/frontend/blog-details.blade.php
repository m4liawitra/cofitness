@extends('frontend.layout.default')

@section('title', __('content.blog.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" style="background-image: url('{{ __('content.blog.details')[$blog_id]['image']['header'] }}');">
        <div class="content">
            <p style="padding: 0px 40px 10px; color: white;">{{ __('content.blog.details')[$blog_id]['author'] }} | {{ __('content.blog.details')[$blog_id]['date'] }}</p>
            <div class="slantedBox2" style="padding: 20px 40px;">
                <h2 class="font-weight-bold" style="font-size: 65px; color: white;">{{ __('content.blog.details')[$blog_id]['title'] }}</h2>
            </div>
        </div>
    </div>
    <div class="slantedDiv1 d-block d-sm-none" style="background-image: url('{{ __('content.blog.details')[$blog_id]['image']['header'] }}');">
        <div class="content1">
            <p style="padding: 0px 40px 10px; color: white;">{{ __('content.blog.details')[$blog_id]['author'] }} | {{ __('content.blog.details')[$blog_id]['date'] }}</p>
            <div class="slantedBox2" style="padding: 10px 30px;">
                <h2 class="font-weight-bold" style="font-size: 18px; color: white;">{{ __('content.blog.details')[$blog_id]['title'] }}</h2>
            </div>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: BLOG DETAILS -->
        <div class="section d-none d-xl-block">
            <div class="row" style="padding: 0 100px;">
                <div class="col-12 col-md-12">
                    <div class="single_post">
                        <div class="blog_content">
                            <div class="blog_text">{!! __('content.blog.details')[$blog_id]['content'] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 mt-5 post_navigation bg_gray">
                    <div class="row align-items-center @if (!is_null($blog_prev_id) && !is_null($blog_next_id)) justify-content-between @elseif (!is_null($blog_prev_id)) justify-content-start @elseif (!is_null($blog_next_id)) justify-content-end @endif p-4">
                        @if (!is_null($blog_prev_id))
                            <div class="col-5">
                                <a href="{{ route('blog.show', ['id' => $blog_prev_id]) }}">
                                    <div class="post_nav post_nav_prev">
                                        <i class="ti-arrow-left text_default"></i>
                                        <span class="text_default">{{ __('content.blog.details')[$blog_prev_id]['title'] }}</span>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if (!is_null($blog_next_id))
                            <div class="col-5">
                                <a href="{{ route('blog.show', ['id' => $blog_next_id]) }}">
                                    <div class="post_nav post_nav_next">
                                        <i class="ti-arrow-right text_default"></i>
                                        <span class="text_default">{{ __('content.blog.details')[$blog_next_id]['title'] }}</span>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none mt-4">
            <div class="row" style="padding: 0 50px;">
                <div class="col-12 col-md-12">
                    <div class="single_post">
                        <div class="blog_content">
                            <div class="blog_text">{!! __('content.blog.details')[$blog_id]['content'] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 mt-5 post_navigation bg_gray">
                    <div class="row align-items-center @if (!is_null($blog_prev_id) && !is_null($blog_next_id)) justify-content-between @elseif (!is_null($blog_prev_id)) justify-content-start @elseif (!is_null($blog_next_id)) justify-content-end @endif p-4">
                        @if (!is_null($blog_prev_id))
                            <div class="col-5">
                                <a href="{{ route('blog.show', ['id' => $blog_prev_id]) }}">
                                    <div class="post_nav post_nav_prev">
                                        <i class="ti-arrow-left text_default"></i>
                                        <span class="text_default">{{ __('content.blog.details')[$blog_prev_id]['title'] }}</span>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if (!is_null($blog_next_id))
                            <div class="col-5">
                                <a href="{{ route('blog.show', ['id' => $blog_next_id]) }}">
                                    <div class="post_nav post_nav_next">
                                        <i class="ti-arrow-right text_default"></i>
                                        <span class="text_default">{{ __('content.blog.details')[$blog_next_id]['title'] }}</span>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- END: BLOG DETAILS -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/blog-details.css') }}" />
@endsection

@section('scripts')

@endsection