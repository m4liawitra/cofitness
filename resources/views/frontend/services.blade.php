@extends('frontend.layout.default')

@section('title', __('content.services.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" id="skewedBG">
        <div class="content">
            <div>
                <h2 class="mb-2 font-weight-bold" style="font-size: 80px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">OUR</h2>
                <h2 class="font-weight-bold" style="font-size: 80px; color: white;">SERVICES</h2>
            </div>
        </div>
        <div class="contentSkew"></div>
    </div>
    <div class="slantedDiv1 d-block d-sm-none" id="skewedBG1">
        <div class="content1">
            <h2 class="mb-2 font-weight-bold" style="font-size: 38px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">OUR</h2>
            <h2 class="font-weight-bold" style="font-size: 38px; color: white;">SERVICES</h2>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: WHAT WE OFFER -->
        <div class="slantedDiv2 section pt-0 pb_70 d-none d-xl-block">
            <div id="offer">WE OFFER</div>
            <div class="row d-flex justify-content-center" style="padding: 20px 100px;">
                <div class="heading_s1">
                    <h2 class="text_default" style="font-size: 55px; letter-spacing: 3px;">WHAT WE OFFER</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="padding: 20px 200px;">
                <p class="text-center" style="color: black">Welcome to our fitness center! We're excited to help you reach your fitness goals and improve your overall health and wellness. Our team of experienced and certified professionals is here to provide you with a wide range of services to help you achieve your fitness goals. Here are some of the services we offer: </p>
            </div>
        </div>
        <div class="section pb_70 d-block d-sm-none">
            <div class="row d-flex justify-content-center" style="padding: 0 20px;">
                <div class="heading_s1">
                    <h2 class="text_default" style="font-size: 40px;">WHAT WE OFFER</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="padding: 0 50px;">
                <p class="text-justify" style="color: black;">Welcome to our fitness center! We're excited to help you reach your fitness goals and improve your overall health and wellness. Our team of experienced and certified professionals is here to provide you with a wide range of services to help you achieve your fitness goals. Here are some of the services we offer: </p>
            </div>
        </div>
        <!-- END: WHAT WE OFFER -->
        <!-- START: OFFERS-->
        <div class="section slantedDiv3 bg_default d-none d-xl-block">
            <div class="row align-items-center">
                <div class="col-md-6" style="padding-left: 100px;">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 style="font-size: 50px; letter-spacing: 3px;">CLUB MEMBERSHIP</h3>
                        <p class="mt-2">Our gym offers an exclusive and comprehensive fitness experience for members of all fitness levels, with types of membership that meets the needs of our clientele, such as individual and corporate.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/club-membership.png') }}" alt="{{ __('content.services.text_club_membership') }}" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-start">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/fitness-orientation.png') }}" alt="{{ __('content.services.text_fitness_orientation') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 100px;">
                    <div class="heading_s1 mb-md-0 heading_light text-right">
                        <h3 style="font-size: 50px; letter-spacing: 3px;">FITNESS ORIENTATION & CONSULTATION</h3>
                        <p class="mt-2">Be guided by Personal Trainer to assess your current fitness level and develop a personalized plan to help achieve your desired outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6" style="padding-left: 100px;">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 style="font-size: 50px; letter-spacing: 3px;">PERSONALIZED TRAINING</h3>
                        <p class="mt-2">Whether you're looking to lose weight, build muscle, or improve your overall fitness level, our expert trainers will work with you to realize your fitness goals.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/personalized-training.png') }}" alt="{{ __('content.services.text_personalized_training') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="slantedDiv4 section d-none d-xl-block">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-start">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/functional-body.png') }}" alt="{{ __('content.services.text_functional_body') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 100px;">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">FUNCTIONAL BODY BUILDING CLASS</h3>
                        <p class="mt-2" style="color: black;">Prepare your body for rigorous physical actions whether for daily activities or for athletic competition in a safe and effective manner</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6" style="padding-left: 100px;">
                    <div class="heading_s1 mb-md-0 heading_light text-right;">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">NUTRITION COUNSELING AND DESIGN</h3>
                        <p class="mt-2" style="color: black;">Licensed dietitian can help assess your nutritional needs and develop personalized nutrition plans that support your health and well-being.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/nutrition.png') }}" alt="{{ __('content.services.text_nutrition') }}" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-start">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/physical-therapy.png') }}" alt="{{ __('content.services.text_physical_therapy') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 100px;">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">PHYSICAL THERAPY AND OTHER REHAB SERVICES</h3>
                        <p class="mt-2" style="color: black;">Licensed physical therapists can help diagnose and treat physical impairments to improve and restore the physical abilities and functions of an individual</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg_default d-block d-sm-none">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 d-flex justify-content-end" style="padding-left: 50px;">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/club-membership.png') }}" alt="{{ __('content.services.text_club_membership') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-left: 50px; padding-right: 30px;">
                    <div class="heading_s1 mb-md-0 heading_light text-right">
                        <h3 style="font-size: 30px;">CLUB MEMBERSHIP</h3>
                        <p class="mt-2">Our gym offers an exclusive and comprehensive fitness experience for members of all fitness levels, with types of membership that meets the needs of our clientele, such as individual and corporate.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                <div class="col-md-6 d-flex justify-content-start" style="padding-right: 50px;">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/fitness-orientation.png') }}" alt="{{ __('content.services.text_fitness_orientation') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 50px; padding-left: 30px;">
                    <div class="heading_s1 mb-md-0 heading_light text-left">
                        <h3 style="font-size: 30px;">FITNESS ORIENTATION & CONSULTATION</h3>
                        <p class="mt-2">Be guided by Personal Trainer to assess your current fitness level and develop a personalized plan to help achieve your desired outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                <div class="col-md-6 d-flex justify-content-end" style="padding-left: 50px;">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/personalized-training.png') }}" alt="{{ __('content.services.text_personalized_training') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-left: 50px; padding-right: 30px;">
                    <div class="heading_s1 mb-md-0 heading_light text-right">
                        <h3 style="font-size: 30px;">PERSONALIZED TRAINING</h3>
                        <p class="mt-2">Whether you're looking to lose weight, build muscle, or improve your overall fitness level, our expert trainers will work with you to realize your fitness goals.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-start" style="padding-right: 50px;">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/functional-body.png') }}" alt="{{ __('content.services.text_functional_body') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 50px; padding-left: 30px;">
                    <div class="heading_s1 mb-md-0 heading_light text-left">
                        <h3 class="text_default" style="font-size: 30px;">FUNCTIONAL BODY BUILDING CLASS</h3>
                        <p class="mt-2" style="color: black;">Prepare your body for rigorous physical actions whether for daily activities or for athletic competition in a safe and effective manner</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-end" style="padding-left: 50px;">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/nutrition.png') }}" alt="{{ __('content.services.text_nutrition') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-left: 50px; padding-right: 30px;">
                    <div class="heading_s1 mb-md-0 heading_light text-right">
                        <h3 class="text_default" style="font-size: 30px;">NUTRITION COUNSELING AND DESIGN</h3>
                        <p class="mt-2" style="color: black;">Licensed dietitian can help assess your nutritional needs and develop personalized nutrition plans that support your health and well-being.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-start" style="padding-right: 50px;">
                    <div class="about_img scene mb-4 mb-lg-0" >
                        <img src="{{ asset('assets/frontend/images/services/physical-therapy.png') }}" alt="{{ __('content.services.text_physical_therapy') }}" />
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 50px; padding-left: 30px;">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default" style="font-size: 30px;">PHYSICAL THERAPY AND OTHER REHAB SERVICES</h3>
                        <p class="mt-2" style="color: black;">Licensed physical therapists can help diagnose and treat physical impairments to improve and restore the physical abilities and functions of an individual</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: OFFERS-->
        <!-- START: START YOUR FREE TRIAL -->
        <div class="section pt-0 d-none d-xl-block">
            <div class="background_bg" style="height: 650px;" data-img-src="{{ asset('assets/frontend/images/services/signup.jpg') }}">
                <div class="row align-items-center" style="padding: 200px 90px;">
                    <div class="col-lg-6 col-6">
                        <div class="banner_content">
                            <h3 class="mb-3 font-weight-bold" style="font-size: 50px; letter-spacing: 3px; color: white;">START YOUR FREE 3 DAYS TRIAL</h3>
                            <p class="mt-2" style="color: white;">Join us and get amazing results</p>
                            {{--
                            <form>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="f_name" placeholder="First Name" />
                                </div>
                                <a href="javascript: void(0);" class="btn btn-outline-danger border-0 rounded-0" style="background-color: white; color: #C12435;">SEND</a>
                            </form>
                            --}}
                            <a href="{{ route('contact') }}" class="btn btn-outline-danger border-0 rounded-0" style="background-color: white; color: #C12435;">Register Your Interest Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="background_bg" style="height: 650px;" data-img-src="{{ asset('assets/frontend/images/services/signup.jpg') }}">
                <div class="row align-items-center" style="padding: 200px 50px;">
                    <div class="col-lg-6 col-sm-12">
                        <div class="banner_content">
                            <h3 class="mb-3 font-weight-bold text-center" style="font-size: 30px; color: white;">START YOUR FREE 3 DAYS TRIAL</h3>
                            <p class="mt-2 text-center" style="color: white;">Join us and get amazing results</p>
                            {{--
                            <form>
                                <div class="form-group col-sm-12 d-flex justify-content-center">
                                    <input type="text" required="" class="form-control" name="f_name" placeholder="First Name" />
                                </div>
                                <div class="col-sm-12 d-flex justify-content-center">
                                    <a href="javascript: void(0);" class="btn btn-outline-danger border-0 rounded-0" style="background-color: white; color: #C12435;">SEND</a>
                                </div>
                            </form>
                            --}}
                            <a href="{{ route('contact') }}" class="btn btn-outline-danger border-0 rounded-0" style="background-color: white; color: #C12435;">Register Your Interest Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: START YOUR FREE TRIAL -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/services.css') }}" />
@endsection

@section('scripts')

@endsection
