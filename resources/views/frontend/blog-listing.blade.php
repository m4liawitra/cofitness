@extends('frontend.layout.default')

@section('title', __('content.blog.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" id="skewedBG">
        <div class="content">
            <div>
                <h2 class="mb-2 font-weight-bold" style="font-size: 80px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">OUR LATEST</h2>
                <h2 class="font-weight-bold" style="font-size: 80px; color: white;">BLOG POSTS</h2>
            </div>
        </div>
        <div class="contentSkew"></div>
    </div>
    <div class="slantedDiv1 d-block d-sm-none" id="skewedBG1">
        <div class="content1">
            <h2 class="mb-2 font-weight-bold" style="font-size: 38px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">OUR LATEST</h2>
            <h2 class="font-weight-bold" style="font-size: 38px; color: white;">BLOG POSTS</h2>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: BLOG LISTING -->
        <div class="section d-none d-xl-block">
            <div class="row" style="padding: 0 100px;">
                @foreach (__('content.blog.details') as $blog_id => $blog)
                    <div class="col-md-4">
                        <div class="single_banner overlay_bg_30" style="height: 350px;">
                            <img src="{{ $blog['image']['thumbnail'] }}" alt="{{ $blog['title'] }}" style="height: 100%; object-fit: cover;" />
                            <div class="single_banner_info1" style="width: 100%;">
                                <a href="{{ route('blog.show', ['id' => $blog_id]) }}"><h5 style="color: white;"> - READ MORE</h5></a>
                            </div>
                            <div class="single_banner_info2" style="width: 100%;">
                                <h5 style="color: white;">{{ $blog['title'] }}</h5>
                                <p style="color: white;">{{ $blog['author'] }} | <span>{{ $blog['date'] }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <a class="btn btn-fill-out" href="#">SEE MORE</a>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row" style="padding: 0 30px;">
                @foreach (__('content.blog.details') as $blog_id => $blog)
                    <div class="col-md-4">
                        <div class="single_banner overlay_bg_30" style="height: 350px;">
                            <img src="{{ $blog['image']['thumbnail'] }}" alt="{{ $blog['title'] }}" style="height: 100%; object-fit: cover;" />
                            <div class="single_banner_info1" style="width: 100%;">
                                <a href="{{ route('blog.show', ['id' => $blog_id]) }}"><h5 style="color: white;"> - READ MORE</h5></a>
                            </div>
                            <div class="single_banner_info2" style="width: 100%;">
                                <h5 style="color: white;">{{ $blog['title'] }}</h5>
                                <p style="color: white;">{{ $blog['author'] }} | <span>{{ $blog['date'] }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <a class="btn btn-fill-out" href="#">SEE MORE</a>
            </div>
        </div>
        <!-- END: BLOG LISTING -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/blog-listing.css') }}" />
@endsection

@section('scripts')

@endsection
