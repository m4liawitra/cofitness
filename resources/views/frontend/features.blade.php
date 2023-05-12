@extends('frontend.layout.default')

@section('title', __('content.features.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" id="skewedBG">
        <div class="content">
            <div>
                <h2 class="mb-2 font-weight-bold" style="font-size: 80px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">GYM</h2>
                <h2 class="font-weight-bold" style="font-size: 80px; color: white;">FEATURES</h2>
            </div>
        </div>
        <div class="contentSkew"></div>
    </div>
    <div class="slantedDiv5 d-block d-sm-none" id="skewedBG5">
        <div class="content5">
            <h2 class="mb-2 font-weight-bold" style="font-size: 38px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">GYM</h2>
            <h2 class="font-weight-bold" style="font-size: 38px; color: white;">FEATURES</h2>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: DESERVE THE BEST -->
        <div class="slantedDiv1 d-none d-xl-block">
            <div id="deserve">YOU DESERVE</div>
            <div id="best">THE BEST</div>
            <div class="row" style="padding: 50px 100px 0;">
                <div class="col-md-6 col-6">
                    <div style="position: absolute; bottom: -55px">
                        <img src="{{ asset('assets/frontend/images/features/deserve.png') }}" alt="{{ __('content.features.text_deserve_the_best') }}" style="width: 76%;" />
                    </div>
                </div>
                <div class="col-md-6 col-6 float-right">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default text-center" style="font-size: 50px; letter-spacing: 3px;">YOU DESERVE THE BEST WITH CO FITNESS</h3>
                        <p class="mt-2 ml-4" style="color: black;">Our trainers are dedicated professionals who are passionate about helping you achieve your fitness goals. With years of experience and a commitment to ongoing education and training, our trainers are equipped to provide you with the guidance and support you need to succeed. If you're looking for personalized attention and expert guidance to help you achieve your fitness goals, consider working with one of our trainers</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-none">
            <div class="row" style="padding: 50px 50px;">
                <div class="col-sm-12">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default text-center" style="font-size: 30px;">YOU DESERVE THE BEST WITH CO FITNESS</h3>
                        <p class="mt-2 ml-4" style="color: black;">Our trainers are dedicated professionals who are passionate about helping you achieve your fitness goals. With years of experience and a commitment to ongoing education and training, our trainers are equipped to provide you with the guidance and support you need to succeed. If you're looking for personalized attention and expert guidance to help you achieve your fitness goals, consider working with one of our trainers</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <img src="{{ asset('assets/frontend/images/features/deserve.png') }}" alt="{{ __('content.features.text_deserve_the_best') }}" />
                </div>
            </div>
        </div>
        <!-- END: DESERVE THE BEST -->
        <!-- START: WITH BEST RESULTS -->
        <div class="slantedDiv2 d-none d-xl-block" id="skewedBG2">
            <div class="content2">
                <div class="row align-items-center" style="padding: 80px 100px;">
                    <div class="col-md-5 col-5">
                        <h3 style="font-size: 50px; letter-spacing: 3px; color: white;">WE PROVIDE THE MOST INTENSIVE TRAININGS</h3>
                        <h3 style="font-size: 40px; letter-spacing: 3px; color: white;">WITH THE BEST RESULTS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="slantedDiv3 d-block d-sm-none" id="skewedBG3">
            <div class="content3">
                <div class="row align-items-center" style="padding: 80px 30px;">
                    <div class="col-sm-12">
                        <h3 style="font-size: 30px; color: white;">WE PROVIDE THE MOST INTENSIVE TRAININGS</h3>
                        <h3 style="font-size: 28px; color: white;">WITH THE BEST RESULTS</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: WITH BEST RESULTS -->
        <!-- START: GYM FACILITIES -->
        <div class="section pt-0 d-none d-xl-block">
            <div class="row" style="padding: 20px 100px;">
                <div class="col-md-7 col-7">
                    <div class="heading_s1 mb-md-0 heading_light d-flex align-items-center" style="height: 50%;">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">GYM FACILITIES AND EQUIPMENT</h3>
                    </div>
                    <div class="blog_post blog_style2" style="height: 50%;">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-01.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-5">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-02.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-03.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-04.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-05.png') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-06.png') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-07.png') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row" style="padding: 20px 50px;">
                <div class="col-sm-12">
                    <div class="heading_s1 mb-md-0 heading_light d-flex align-items-center">
                        <h3 class="text_default text-center" style="font-size: 50px;">GYM FACILITIES AND EQUIPMENT</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-02.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-01.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-03.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-04.jpg') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-05.png') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-06.png') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog_post blog_style2">
                        <div class="blog_img">
                            <a href="#">
                                <img src="{{ asset('assets/frontend/images/features/facilities-07.png') }}" alt="{{ __('content.features.text_gym_facilities_and_equipments') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: GYM FACILITIES -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/features.css') }}" />
@endsection

@section('scripts')

@endsection
