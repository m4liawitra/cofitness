@extends('frontend.layout.default')

@section('title', __('content.home.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block">
        <div class="content"></div>
    </div>
    <div class="slantedDiv1 d-block d-sm-none">
        <div class="content1"></div>
    </div>
    <!--<div class="messenger">
        <img src="{{ asset('assets/frontend/images/home/comment.png') }}" width="90%"/>
    </div>-->
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: ABOUT US -->
        <div class="slantedDiv2 section pb_20 d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="single_banner">
                            <img src="{{ asset('assets/frontend/images/home/about-us.jpg') }}" alt="{{ __('content.home.image.about_us') }}" />
                        </div>
                    </div>
                    <div class="col-md-6 pl-4">
                        <div class="single_banner">
                            <div class="pb-5">
                                <h2 style="font-size: 40px; font-weight: 800; letter-spacing: 3px; font-style: italic;">KEEP YOUR MIND AND BODY</h2>
                                <h2 class="my-4" style="font-size: 40px; font-weight: 800; letter-spacing: 3px; font-style: italic; color: #FF324D;">STRONG WITH US!</h2>
                                <a href="{{ route('content.about') }}" class="btn btn-fill-out mt-4">About Us</a>
                            </div>
                        </div>`
                    </div>
                </div>
            </div>
        </div>
        <div class="section pb_20 d-block d-sm-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 pl-4">
                        <div class="single_banner">
                            <div class="text-center">
                                <h2 style="font-size: 40px; font-weight: 800; font-style: italic;">{{ Str::upper(__('content.home.text_keep_your_mind_and_body')) }}</h2>
                                <h2 class="my-4" style="font-size: 40px font-weight: 800; font-style: italic; color: #FF324D;">{{ Str::upper(__('content.home.text_strong_with_us')) }}</h2>
                                <a href="{{ route('content.about') }}" class="btn btn-fill-out mt-4">{{ Str::upper(__('content.home.button.about')) }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single_banner">
                            <img src="{{ asset('assets/frontend/images/home/about-us.jpg') }}" alt="{{ __('content.home.image.about_us') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: ABOUT US -->
        <!-- START: SERVICES -->
        <div class="section small_pt bg_default d-block d-sm-none px-3" style="padding: 100px 0;">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2 class="text-white" style="font-size: 35px; letter-spacing: 3px;">{{ Str::upper(__('content.home.text_about_us')) }}</h2>
                        <p class="text-white">{{ __('content.home.text_about_us_description') }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-responsive='{"0": {"items": "1"},"481": {"items": "2"},"768": {"items": "2"},"1199": {"items": "2"}}'>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-club.jpg') }}" alt="{{ __('content.home.image.services_club') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-fitness.jpg') }}" alt="{{ __('content.home.image.services_fitness') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-training.jpg') }}" alt="{{ __('content.home.image.services_training') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-class.jpg') }}" alt="{{ __('content.home.image.services_class') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-nutrition.jpg') }}" alt="{{ __('content.home.image.services_nutrition') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-rehab.jpg') }}" alt="{{ __('content.home.image.services_rehab') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slantedDiv3 section small_pt bg_default d-none d-xl-block" style="padding: 100px 0;">
            <div id="container">SERVICES</div>
            <div class="row" style="padding-top: 20px; padding-bottom: 20px; padding-left: 50px;">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="heading_s1">
                        <h2 class="text-white" style="font-size: 55px; letter-spacing: 3px;">{{ Str::upper(__('content.home.text_about_us')) }}</h2>
                        <p class="text-white">{{ __('content.home.text_about_us_description') }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-responsive='{"0": {"items": "1"},"481": {"items": "2"},"768": {"items": "2"},"1199": {"items": "2"}}'>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-club.jpg') }}" alt="{{ __('content.home.image.services_club') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-fitness.jpg') }}" alt="{{ __('content.home.image.services_fitness') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-training.jpg') }}" alt="{{ __('content.home.image.services_training') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-class.jpg') }}" alt="{{ __('content.home.image.services_class') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-nutrition.jpg') }}" alt="{{ __('content.home.image.services_nutrition') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/frontend/images/home/services-rehab.jpg') }}" alt="{{ __('content.home.image.services_rehab') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SERVICES -->
        <!-- START: FEATURES -->
        <div class="section d-none d-xl-block">
            <div class="container">
                <div id="features">FEATURES</div>
                <div class="row d-none d-xl-block">
                    <div class="heading_s1">
                        <h2 class="text_default" style="font-size: 65px; letter-spacing: 4px;">FEATURES</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center mb-0 d-none d-xl-block" style="border-top: solid 2px #C12435; padding: 10px 0;">
                            <h2 style="font-size: 65px; letter-spacing: 4px;">GYM FACILITIES</h2>
                        </div>
                        <div class="heading_s1 text-center mb-0 d-block d-sm-none mx-auto" style="border-top: solid 2px #C12435; padding: 20px 0;">
                            <h2 style="font-size: 45px;">GYM FACILITIES</h2>
                        </div>
                        <hr class="mb-0 mt-0" style="border-top: solid 2px #C12435; width:80%">
                        <div class="heading_s1 text-center">
                            <p>Unparalleled Facilities for Your Ultimate Workout Experience</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-reception-area.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">RECEPTION AREA</h6>
                                    <p class="text-right" style="color: black;">Your Fitness Journey Begins Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-pt-room.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">PHYSICAL THERAPY ROOM</h6>
                                    <p class="text-right" style="color: black;">Expert Care, Optimal Recovery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-lockers.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">LOCKERS</h6>
                                    <p class="text-right" style="color: black;">Secure Your Fitness Journey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-shower-room.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">SHOWER ROOM</h6>
                                    <p class="text-right" style="color: black;">Refresh, Rejuvenate, Repeat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-functional-area-01.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">FUNCTIONAL AREA</h6>
                                    <p class="text-right" style="color: black;">Unleash Your Strength</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-functional-area-02.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">FUNCTIONAL AREA</h6>
                                    <p class="text-right" style="color: black;">Get Functional , Get Result</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <a href="{{ route('content.features') }}" class="btn btn-fill-out">SEE MORE</a>
                </div>
                <div class="row mt-5">
                    <div class="col-md-5 mr-auto" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="row">
                            <div class="col p-0">
                                <img src="{{ asset('assets/frontend/images/home/features-metcon.jpg') }}" alt="{{ __('content.features.title') }}" style="min-height: 100%; min-width: 100%; object-fit: cover;" />
                                <a href="{{ route('content.features') }}#section-facilities" class="btn btn-fill-out" style="position: absolute; left: 20px; top:65px; background: white;">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="row">
                            <div class="col p-0">
                                <img src="{{ asset('assets/frontend/images/home/features-technogym.jpg') }}" alt="{{ __('content.features.title') }}" style="min-height: 100%; min-width: 100%; object-fit: cover;" />
                                <a href="{{ route('content.features') }}#section-facilities" class="btn btn-fill-out" style="position: absolute; left: 20px; top: 66px; background: white;">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5 text-center">
                    <p style="font-weight: bold; color: black;">Elevate Your Fitness: Experience Luxury with Our High-End Gym Equipment. </p>
                </div>
            </div>
        </div>
        <div class="section pt-4 d-block d-sm-none">
            <div class="container">
                <div class="row d-sm-none d-block justify-content-center text-center">
                    <div class="heading_s1 mx-auto">
                        <h2 class="text_default" style="font-size: 45px; letter-spacing: 4px;">FEATURES</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center mb-0 d-none d-xl-block" style="border-top: solid 2px #C12435; padding: 20px 0;">
                            <h2 style="font-size: 65px; letter-spacing: 4px;">GYM FACILITIES</h2>
                        </div>
                        <div class="heading_s1 text-center mb-0 d-block d-sm-none mx-auto" style="border-top: solid 2px #C12435; padding: 20px 0;">
                            <h2 style="font-size: 45px">GYM FACILITIES</h2>
                        </div>
                        <div class="heading_s1 text-center" style="border-top: solid 2px #C12435; padding: 20px 0;">
                            <p style="color: black;">Unparalleled Facilities for Your Ultimate Workout Experience</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-reception-area.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">RECEPTION AREA</h6>
                                    <p class="text-right" style="color: black;">Your Fitness Journey Begins Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-pt-room.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">PHYSICAL THERAPY ROOM</h6>
                                    <p class="text-right" style="color: black;">Expert Care, Optimal Recovery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-lockers.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">LOCKERS</h6>
                                    <p class="text-right" style="color: black;">Secure Your Fitness Journey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-shower-room.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">SHOWER ROOM</h6>
                                    <p class="text-right" style="color: black;">Refresh, Rejuvenate, Repeat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-functional-area-01.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">FUNCTIONAL AREA</h6>
                                    <p class="text-right" style="color: black;">Unleash Your Strength</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_post blog_style2">
                            <div class="blog_img">
                                <img src="{{ asset('assets/frontend/images/home/features-functional-area-02.jpg') }}" alt="{{ __('content.features.title') }}" />
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h6 class="blog_title mb-0" style="font-style: italic;">FUNCTIONAL AREA</h6>
                                    <p class="text-right" style="color: black;">Get Functional , Get Result</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-5">
                    <a href="{{ route('content.features') }}" class="btn btn-fill-out">SEE MORE</a>
                </div>
                <div class="row mt-5">
                    <div class="col-md-5 mr-auto" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="row">
                            <div class="col p-0">
                                <img src="{{ asset('assets/frontend/images/home/features-metcon.jpg') }}" alt="{{ __('content.features.title') }}" style="min-height: 100%; min-width: 100%; object-fit: cover;" />
                                <a href="{{ route('content.features') }}#section-facilities" class="btn btn-fill-out" style="position: absolute; left: 23px; top:55px; background: white;">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="row">
                            <div class="col p-0">
                                <img src="{{ asset('assets/frontend/images/home/features-technogym.jpg') }}" alt="{{ __('content.features.title') }}" style="min-height: 100%; min-width: 100%; object-fit: cover;" />
                                <a href="{{ route('content.features') }}#section-facilities" class="btn btn-fill-out" style="position: absolute; left: 23px; top: 55px; background: white;">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3 text-center">
                    <p style="font-weight: bold; color: black">Elevate Your Fitness: Experience Luxury with Our High-End Gym Equipment. </p>
                </div>
            </div>
        </div>
        <!-- END: FEATURES -->
        {{--
        <!-- START: BOOK NOW -->
        <div class="section book d-none d-xl-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="heading_s1 text-center">
                            <h2 style="font-size: 60px; letter-spacing: 4px; color: white;">BOOK YOUR FUNCTIONAL BODY BUILDING CLASS TODAY</h2>
                            <p class="mt-3" style="color: white;">Join our workout class tailored to your fitness goals.</p>
                            <a href="javascript: void(0);" class="btn btn-outline-danger border-0 mt-4" style="background-color: white; color: #C12435;">SEE MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section book d-block d-sm-none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="heading_s1 text-center">
                            <h2 style="font-size: 30px; color: white;">BOOK YOUR FUNCTIONAL BODY BUILDING CLASS TODAY</h2>
                            <p class="mt-3" style="color: white;">Join our workout class tailored to your fitness goals.</p>
                            <a href="javascript: void(0);" class="btn btn-outline-danger border-0 mt-4" style="background-color: white; color: #C12435;">SEE MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: BOOK NOW -->
        --}}
        <!-- START: CALCULATE BMI -->
        <div class="section pb-0 pt-md-0 ">
            <div class="container">
                <div class="d-none d-xl-block" id="calculate">CALCULATE</div>
                <div class="row align-items-center bmi">
                    <div class="col-md-6 col-12">
                        <div class="medium_divider d-none d-md-block clearfix"></div>
                        <div class="trand_banner_text text-center text-md-left">
                            <div class="heading_s1 mb-3 d-none d-xl-block">
                                <h2 style="font-size: 55px; letter-spacing: 2px;">CALCULATE YOUR BMI</h2>
                            </div>
                            <div class="heading_s1 mb-3 d-block d-sm-none">
                                <h2 style="font-size: 25px; font-weight: 600;">CALCULATE YOUR BMI</h2>
                            </div>
                            <p class="mb-4" style="color: black;">Keep Track of Your body</p>
                            <form id="form-calculate-bmi" name="form_calculate_bmi">
                                <div class="row">
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="unit" data-placeholder-weight="{{ __('labels.bmi.form.weight') }} / {{ __('labels.bmi.form.weight_units.metric') }}" data-placeholder-height="{{ __('labels.bmi.form.height') }} / {{ __('labels.bmi.form.height_units.metric') }}" checked />
                                            <span>{{ __('labels.bmi.form.metric_units') }}</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="unit" data-placeholder-weight="{{ __('labels.bmi.form.weight') }} / {{ __('labels.bmi.form.weight_units.imperial') }}" data-placeholder-height="{{ __('labels.bmi.form.height') }} / {{ __('labels.bmi.form.height_units.imperial') }}" />
                                            <span>{{ __('labels.bmi.form.imperial_units') }}</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="weight" class="form-control" name="weight" placeholder="{{ __('labels.bmi.form.weight') }} / {{ __('labels.bmi.form.weight_units.metric') }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="height" class="form-control" name="height" placeholder="{{ __('labels.bmi.form.height') }} / {{ __('labels.bmi.form.height_units.metric') }}" required />
                                        </div>
                                    </div>
                                </div>
                                <div id="alert-bmi" class="alert" role="alert" style="display: none;">
                                    <div id="message-bmi" class="alert-text font-weight-bold mr-auto"></div>
                                </div>
                                <a href="javascript: void(0);" id="btn-calculate-bmi" class="btn btn-fill-out" title="{{ __('labels.bmi.button.calculate') }}">{{ __('labels.bmi.button.calculate') }}</a>
                            </form>
                        </div>
                        <div class="medium_divider clearfix"></div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="text-center trading_img">
                            <img src="{{ asset('assets/frontend/images/home/bmi.png') }}" alt="{{ __('content.home.text_calculate_bmi') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CALCULATE BMI -->
        <!-- START: BLOG -->
        <div class="section d-none d-xl-block" style="background-color: #dedede;">
            <div id="latest">LATEST BLOG</div>
            <div class="row justify-content-center">
                <div class="heading_s1 text-center">
                    <h2 style="font-size: 35px; letter-spacing: 3px; color: black;">OUR LATEST BLOG POSTS</h2>
                    <p style="color: black;">See what's new on CoFitness.</p>
                </div>
            </div>
            <div class="row" style="padding: 0 100px;">
                @foreach (__('content.blog.details') as $blog_id => $blog)
                    <div class="col-md-4">
                        <div class="single_banner" style="height: 350px;">
                            <a href="{{ route('blog.show', ['id' => $blog_id]) }}">
                                <img src="{{ $blog['image']['thumbnail'] }}" alt="{{ $blog['title'] }}" style="height: 100%; object-fit: cover;" />
                                <div class="single_banner_info2" style="width: 100%;">
                                    <h5 style="color: white;">{{ $blog['title'] }}</h5>
                                    <p style="color: white;">{{ $blog['author'] }} | <span>{{ $blog['date'] }}</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <a href="{{ route('blog') }}" class="btn btn-fill-out">SEE MORE</a>
            </div>
        </div>
        <div class="section d-sm-none d-block" style="background-color: #dedede;">
            <div class="row justify-content-center pt-4">
                <div class="heading_s1 text-center">
                    <h2 style="font-size: 35px; color: black;">OUR LATEST BLOG POSTS</h2>
                    <p style="color: black;">See what's new on CoFitness.</p>
                </div>
            </div>
            <div class="row px-2">
                @foreach (__('content.blog.details') as $blog_id => $blog)
                    <div class="col-md-4">
                        <div class="single_banner" style="height: 350px;">
                            <a href="{{ route('blog.show', ['id' => $blog_id]) }}">
                                <img src="{{ $blog['image']['thumbnail'] }}" alt="{{ $blog['title'] }}" style="height: 100%; object-fit: cover;" />
                                <div class="single_banner_info2" style="width: 100%;">
                                    <h5 style="color: white;">{{ $blog['title'] }}</h5>
                                    <p style="color: white;">{{ $blog['author'] }} | <span>{{ $blog['date'] }}</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <a href="{{ route('blog') }}" class="btn btn-fill-out">SEE MORE</a>
            </div>
        </div>
        <!-- END: BLOG -->
        <!-- START: JOIN US NOW -->
        <div class="section join d-block d-sm-none" style="padding: 200px 0;">
            <div class="row justify-content-center px-3">
                <div class="heading_s1 text-center">
                    <h2 style="font-size: 35px; color: white;">NEED A FITNESS TRAINER?</h2>
                    <p style="color: white;">We'll help up achieve those fitness goals in no time.</p>
                    {{--
                    <form>
                        <div class="row px-3">
                            <div class="form-group col-12">
                                <input type="text" required="" class="form-control" name="f_name" placeholder="First Name" />
                            </div>
                            <div class="form-group col-12">
                                <input type="text" required="" class="form-control" name="l_name" placeholder="Last Name" />
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" required="" class="form-control" name="email" placeholder="Email Address" />
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-fill-out">Contact Us</a>
                    </form>
                    --}}
                </div>
                <a href="{{ route('contact') }}" class="btn btn-fill-out">Register Your Interest Now</a>
            </div>
        </div>
        <div class="section join d-none d-xl-block" style="padding: 200px 0;">
            <div class="row justify-content-center">
                <div class="heading_s1 text-center">
                    <h2 style="font-size: 35px; letter-spacing: 3px; color: white;">JOIN US NOW</h2>
                    <p style="color: white;">We'll help up achieve those fitness goals in no time.</p>
                    {{--
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="f_name" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="l_name" placeholder="Last Name" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Email Address" />
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-fill-out">Contact Us</a>
                    </form>
                    --}}
                    <a href="{{ route('contact') }}" class="btn btn-fill-out">Register Your Interest Now</a>
                </div>
            </div>
        </div>
        <!-- END: JOIN US NOW -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/home.css') }}" />
@endsection

@section('scripts')
    <script type="text/javascript">
        var FormBMICalculatorController = function() {
            var initListeners = function() {
                $('#form-calculate-bmi input[name="unit"]').on('change', function() {
                    $('#form-calculate-bmi input[name="weight"]').attr('placeholder', $(this).data('placeholder-weight')).val('');
                    $('#form-calculate-bmi input[name="height"]').attr('placeholder', $(this).data('placeholder-height')).val('');
                    resetForm();
                });
                $('#form-calculate-bmi input[name="weight"]').on('keyup', function() {
                    var varValue = $(this).val();
                    varValue = varValue.replace(/[^.0-9]/g, '');
                    $(this).val(varValue);
                });
                $('#form-calculate-bmi input[name="height"]').on('keyup', function() {
                    var varValue = $(this).val();
                    varValue = varValue.replace(/[^.0-9]/g, '');
                    $(this).val(varValue);
                });
                $('#form-calculate-bmi #btn-calculate-bmi').on('click', function() {
                    var varWeight = parseFloat($('#form-calculate-bmi input[name="weight"]').val());
                    var varHeight = parseFloat($('#form-calculate-bmi input[name="height"]').val());
                    if (varWeight > 0 && varHeight > 0) {
                        var varBMI = (varWeight/(varHeight / 100) ** 2).toFixed(1);
                        if (varBMI < 18.5) {
                            var varClass = 'warning';
                            var varBMIDescription = '{{ __('labels.bmi.success.underweight') }}';
                        } else if (varBMI < 25) {
                            var varClass = 'success';
                            var varBMIDescription = '{{ __('labels.bmi.success.normal') }}';
                        } else if (varBMI < 30) {
                            var varClass = 'warning';
                            var varBMIDescription = '{{ __('labels.bmi.success.overweight') }}';
                        } else {
                            var varClass = 'danger';
                            var varBMIDescription = '{{ __('labels.bmi.success.obesity') }}';
                        }
                        resetForm();
                        $('#form-calculate-bmi #message-bmi').html('{{ __('labels.bmi.success.message') }}: '+varBMIDescription);
                        $('#form-calculate-bmi .alert-text').addClass('text-'+varClass);
                        $('#form-calculate-bmi #alert-bmi').addClass('alert-'+varClass).show();
                    } else {
                        $('#form-calculate-bmi #message-bmi').html('{{ __('labels.bmi.error.message') }}');
                        $('#form-calculate-bmi .alert-text').addClass('text-danger');
                        $('#form-calculate-bmi #alert-bmi').addClass('alert-danger').show();
                    }
                });
            };

            var resetForm = function() {
                $('#form-calculate-bmi #message-bmi').html('');
                $('#form-calculate-bmi .alert-text').removeClass('text-warning text-success text-danger');
                $('#form-calculate-bmi #alert-bmi').removeClass('alert-warning alert-success alert-danger').hide();
            };

            return {
                init: function() {
                    initListeners();
                }
            };
        }();

        jQuery(document).ready(function() {
            FormBMICalculatorController.init();
		});
    </script>
@endsection
