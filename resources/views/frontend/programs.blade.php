@extends('frontend.layout.default')

@section('title', __('content.programs.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" id="skewedBG">
        <div class="content">
            <div>
                <h2 class="mb-2 font-weight-bold" style="font-size: 80px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">OUR</h2>
                <h2 class="font-weight-bold" style="font-size: 80px; color: white;">PROGRAMS</h2>
            </div>
        </div>
        <div class="contentSkew"></div>
    </div>
    <div class="slantedDiv5 d-block d-sm-none" id="skewedBG5">
        <div class="content5">
            <h2 class="mb-2 font-weight-bold" style="font-size: 38px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">OUR</h2>
            <h2 class="font-weight-bold" style="font-size: 38px; color: white;">PROGRAMS</h2>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: PROGRAMS -->
        <div class="slantedDiv1 d-none d-xl-block">
            <div id="functional">FUNCTIONAL BODY BUILDING</div>
            <div class="row" style="padding: 0 30px 100px;">
                <div class="col-md-6 col-6">
                    <div style="position: absolute; bottom: -150px">
                        <img src="{{ asset('assets/frontend/images/programs/programs.png') }}" alt="{{ __('content.programs.title') }}" style="width: 100%;" />
                    </div>
                </div>
                <div class="col-md-6 col-6 float-right">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">OUR FUNCTIONAL BODY BUILDING PROGRAMS</h3>
                        <p class="mt-2 ml-4" style="color: black;">At CoFitness, we offer a range of programs to help you achieve your fitness goals. Our
                        experienced coaches will work with you to create a personalized program that fits
                        your goals and abilities. Whether you're new to CrossFit or an experienced athlete, we
                        have a program that's right for you.</p>
                    </div>
                    <div class="heading_s1 mb-md-0 mt-md-3 heading_light">
                        <h3 class="text_default ml-5" style="font-size: 50px; letter-spacing: 3px;">FOUNDATION PROGRAMS</h3>
                        <p class="mt-2" style="color: black;">Our Foundations Program is designed for beginners who are new to CrossFit. In this program, you'll learn the foundational movements and techniques of CrossFit, and get a feel for the intensity of our workouts. Our coaches will work with you to develop proper form and technique, so you can safely and effectively progress to our regular CrossFit classes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-none">
            <div class="row" style="padding: 0 30px;">
                <div class="col-md-12">
                    <div class="heading_s1 mb-md-0 heading_light ">
                        <h3 class="text_default text-center" style="font-size: 40px;">OUR FUNCTIONAL BODY BUILDING PROGRAMS</h3>
                        <p class="mt-2" style="color: black;">At CoFitness, we offer a range of programs to help you achieve your fitness goals. Our
                        experienced coaches will work with you to create a personalized program that fits
                        your goals and abilities. Whether you're new to CrossFit or an experienced athlete, we
                        have a program that's right for you.</p>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="heading_s1 mb-md-0 mt-md-3 heading_light ">
                        <h3 class="text_default text-center" style="font-size: 40px;">FOUNDATION PROGRAMS</h3>
                        <p class="mt-2" style="color: black;">Our Foundations Program is designed for beginners who are new to CrossFit. In this program, you'll learn the foundational movements and techniques of CrossFit, and get a feel for the intensity of our workouts. Our coaches will work with you to develop proper form and technique, so you can safely and effectively progress to our regular CrossFit classes</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/images/programs/programs.png') }}" alt="{{ __('content.programs.title') }}" style="width: 76%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg_default slantedDiv2 d-none d-xl-block">
            <div class="row align-items-center justify-content-center" style="padding: 70px 100px;">
                <div class="col-md-4 col-4">
                    <img src="{{ asset('assets/frontend/images/programs/programs-01.jpg') }}" alt="{{ __('content.programs.title') }}" />
                </div>
                <div class="col-md-4 col-4">
                    <img src="{{ asset('assets/frontend/images/programs/programs-02.jpg') }}" alt="{{ __('content.programs.title') }}" />
                </div>
                <div class="col-md-4 col-4">
                    <img src="{{ asset('assets/frontend/images/programs/programs-03.jpg') }}" alt="{{ __('content.programs.title') }}" />
                </div>
            </div>
        </div>
        <div class="section bg_default d-block d-sm-none">
            <div class="row align-items-center justify-content-center" style="padding: 70px 30px;">
                <div class="col-sm-12">
                    <img src="{{ asset('assets/frontend/images/programs/programs-01.jpg') }}" alt="{{ __('content.programs.title') }}" />
                </div>
                <div class="col-sm-12 mt-3">
                    <img src="{{ asset('assets/frontend/images/programs/programs-02.jpg') }}" alt="{{ __('content.programs.title') }}" />
                </div>
                <div class="col-sm-12 mt-3">
                    <img src="{{ asset('assets/frontend/images/programs/programs-03.jpg') }}" alt="{{ __('content.programs.title') }}" />
                </div>
            </div>
        </div>
        <!-- END: PROGRAMS -->
        <!-- START: GRIN METHOD PROGRAM -->
        <div class="section d-none d-xl-block" style="padding-bottom: 500px">
            <div class="row" style="padding: 50px 100px;">
                <div class="col-md-6 col-6" style="padding-top: 80px; z-index: 1;">
                    <div class="slantedBox">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;padding-right: 400px">IMPROVED STRENGTH & ENDURANCE</p>
                    </div>
                    <div class="slantedBox" style="position: relative; top: 180px;">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;padding-right: 200px">ACTIVATES<br> ALL MUSCLES</p>
                    </div>
                    <div class="slantedBox" style="position: relative; top: 320px;">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;padding-right: 200px">INCREASES<br> CONFIDENCE</p>
                    </div>
                </div>
                <div style="position: absolute;z-index: 3;left: 30%;">
                    <img src="{{ asset('assets/frontend/images/programs/grin-method-program.png') }}" alt="{{ __('content.programs.text_grin_method_program') }}">
                </div>
                <div class="col-md-6 col-6" style="padding-top: 80px; z-index: 1;">
                    <div class="slantedBox1" style="position: relative; top: 140px; right: 30px;">
                        <p style="color: white; font-size: 20px; font-weight: 200; text-align: right; padding-left: 300px;">BETTER BODY POSTURE & COMPOSITION</p>
                    </div>
                    <div class="slantedBox1" style="position: relative; top: 300px; right: 30px; padding-left: 30px;">
                        <p style="color: white; font-size: 20px; font-weight: 200; text-align: right; padding-left: 100px;">SUPPORTS<br>CARDIOVASCULAR HEALTH</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row" style="padding: 50px 30px;">
                <div class="col-sm-12">
                    <img src="{{ asset('assets/frontend/images/programs/grin-method-program.png') }}" alt="{{ __('content.programs.text_grin_method_program') }}">
                </div>
                <div class="col-sm-12" style="padding-top: 80px; padding-left: 30px;">
                    <div class="slantedBox">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;">IMPROVED STRENGTH & ENDURANCE</p>
                    </div>
                    <div class="slantedBox">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;">ACTIVATES<br> ALL MUSCLES</p>
                    </div>
                    <div class="slantedBox">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;">INCREASES<br> CONFIDENCE</p>
                    </div>
                    <div class="slantedBox">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;">BETTER BODY POSTURE & COMPOSITION</p>
                    </div>
                    <div class="slantedBox">
                        <p style="color: white; font-size: 20px; font-weight: 200; padding-left: 20px;">CARDIOVASCULAR HEALTH</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section slantedDiv3 d-none d-xl-block">
            <hr style=" border-top: solid 2px #C12435;width: 90%">
            <div id="grin">GRIN METHOD</div>
            <div class="row align-items-center" style="padding: 100px 0 100px;">
                <div class="col-md-4 col-4 d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('assets/frontend/images/programs/grin-logo.png') }}" alt="{{ __('content.programs.text_grin_method_program') }}">
                        <h3 class="text-center mt-2" style="letter-spacing: 26px;">METHOD</h3>
                    </div>
                </div>
                <div class="col-md-8 col-4">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default" style="font-size: 80px; letter-spacing: 3px;text-shadow: 5px 5px #b4b3b3;">THE GRIN METHOD PROGRAM</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row align-items-center" style="padding: 0 30px;">
                <div class="col-sm-12">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default text-center" style="font-size: 40px;">THE GRIN METHOD PROGRAM</h3>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('assets/frontend/images/programs/grin-logo.png') }}" alt="{{ __('content.programs.text_grin_method_program') }}">
                        <h3 class="text-center mt-2" style="font-size: 30px; letter-spacing: 3px; font-weight: 700;">METHOD</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: GRIN METHOD PROGRAM -->
        <!-- START: FUNCTIONAL BODY BUILDING -->
        <div class="section slantedDiv4 d-none d-xl-block">
            <div class="row" style="padding: 30px 100px;">
                <div class="col-md-6 col-6">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">FUNCTIONAL BODY BUILDING</h3>
                    </div>
                    <div class="pl-3 mt-4">
                        <p style="color: black">using CrossFit as a methodology</p>
                        <ul class="pl-3">
                            <li>Strength and Conditioning</li>
                            <li>Aerobic Capacity</li>
                            <li>Body Composition</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <img src="{{ asset('assets/frontend/images/programs/functional-body-building.png') }}" alt="{{ __('content.programs.text_functional_body_building') }}">
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row" style="padding: 30px 30px;">
                <div class="col-sm-12">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3 class="text_default text-center" style="font-size: 40px;">FUNCTIONAL BODY BUILDING</h3>
                    </div>
                    <div class="pl-3 mt-4">
                        <p class="text-center" style="color: black;">using CrossFit as a methodology</p>
                        <ul class="pl-3">
                            <li>Strength and Conditioning</li>
                            <li>Aerobic Capacity</li>
                            <li>Body Composition</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 mt-4">
                    <img src="{{ asset('assets/frontend/images/programs/functional-body-building.png') }}" alt="{{ __('content.programs.text_functional_body_building') }}" />
                </div>
            </div>
        </div>
        <div class="section p-0 d-none d-xl-block">
            <div class="row">
                <div class="justify-content-center align-items-center" style="width: 50%; height: 700px">
                    <img src="{{ asset('assets/frontend/images/programs/base-fitness.jpg') }}" alt="{{ __('content.programs.text_base_fitness') }}" style="width: 100%; height: 100%; object-fit: cover;" />
                </div>
                <div class="slantedDiv6 w-50" style="padding: 80px 90px;">
                    <div>
                        <div class="row align-items-center justify-content-between">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 50px; letter-spacing: 3px;">BASE FITNESS</h3>
                            </div>
                            <div class="ml-3">
                                <img src="{{ asset('assets/frontend/images/programs/base-fitness-icon.png') }}" alt="{{ __('content.programs.text_base_fitness') }}" width="75" />
                            </div>
                        </div>
                        <p class="mt-3 ml-4" style="color: white;">a well-rounded approach to physical<br> fitness that prioritizes both aesthetics and functionality.</p>
                    </div>
                    <div>
                        <div class="row align-items-center">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 50px; letter-spacing: 3px;">PERFORM</h3>
                            </div>
                        </div>
                        <p class="mt-3 ml-4" style="color: white;">aims to enhance athletic abilities and overall<br> performance through functional movements <br> and exercise</p>
                    </div>
                    <div>
                        <div class="row align-items-center justify-content-between">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 50px; letter-spacing: 3px;">PUMP</h3>
                            </div>
                            <div class="ml-3">
                                <img src="{{ asset('assets/frontend/images/programs/pump-icon.png') }}" alt="{{ __('content.programs.text_pump') }}" width="75" />
                            </div>
                        </div>
                        <p class="mt-3 ml-4" style="color: white;">focuses on improving body<br> composition and enhancing overall physique.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section p-0 d-block d-sm-none">
            <div class="row">
                <div class="justify-content-center align-items-center" style="width: 100%; height: 500px;">
                    <img src="{{ asset('assets/frontend/images/programs/base-fitness.jpg') }}" alt="{{ __('content.programs.text_base_fitness') }}" style="width: 100%; height: 100%; object-fit: cover;" />
                </div>
                <div class="w-100 bg_default" style="padding: 80px 40px;">
                    <div>
                        <div class="row align-items-center">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 30px;">BASE FITNESS</h3>
                            </div>
                            <div class="ml-2">
                                <img src="{{ asset('assets/frontend/images/programs/base-fitness-icon.png') }}" alt="{{ __('content.programs.text_base_fitness') }}" width="50" />
                            </div>
                        </div>
                        <p class="mt-3" style="color: white;">a well-rounded approach to physical<br> fitness that prioritizes both aesthetics and functionality.</p>
                    </div>
                    <div class="mt-2">
                        <div class="row align-items-center">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 30px;">PERFORM</h3>
                            </div>
                        </div>
                        <p class="mt-3" style="color: white;">aims to enhance athletic abilities and overall<br> performance through functional movements <br> and exercise</p>
                    </div>
                    <div class="mt-2">
                        <div class="row align-items-center">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 30px;">PUMP</h3>
                            </div>
                            <div class="ml-2">
                                <img src="{{ asset('assets/frontend/images/programs/pump-icon.png') }}" alt="{{ __('content.programs.text_pump') }}" width="50" />
                            </div>
                        </div>
                        <p class="mt-3" style="color: white;">focuses on improving body<br> composition and enhancing overall physique.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section p-0 d-none d-xl-block">
            <div class="row">
                <div class="w-50" style="padding: 80px 100px;">
                    <div class="heading_s1 mb-3 heading_light">
                        <h3 class="text_default" style="font-size: 50px; letter-spacing: 3px;">JUMP START</h3>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="ml-3">
                                <img src="{{ asset('assets/frontend/images/programs/goal-setting-icon.png') }}" alt="{{ __('content.programs.text_goal_setting') }}" width="75" />
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 30px; letter-spacing: 3px; color: black;">GOAL SETTING</h3>
                                <p class="mt-2 ml-2" style="color: black;">Knowing your purpose.<br>Discovering your why</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-md-4 col-4">
                            <div class="ml-3">
                                <img src="{{ asset('assets/frontend/images/programs/eating-healthy-icon.png') }}" alt="{{ __('content.programs.text_eating_healthy') }}" width="75" />
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 30px; letter-spacing: 3px; color: black;">EATING HEALTHY</h3>
                                <p class="mt-2 ml-2" style="color: black;">You are what you eat.<br>Consuming healthily.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-4 p-0">
                            <div class="ml-3">
                                <img src="{{ asset('assets/frontend/images/programs/workout-icon.png') }}" alt="{{ __('content.programs.text_workout') }}" width="75" />
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 30px; letter-spacing: 3px; color: black;">WORKOUT</h3>
                                <p class="mt-2 ml-2" style="color: black;">Getting a routine and <br> sticking to it.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slantedDiv8">
                    <div class="content8"></div>
                </div>
            </div>
        </div>
        <div class="section p-0 d-block d-sm-none">
            <div class="row">
                <div class="justify-content-center align-items-center" style="width: 100%; height: 700px;">
                    <img src="{{ asset('assets/frontend/images/programs/jump-start.jpg') }}" alt="{{ __('content.programs.text_jump_start') }}" style="width: 100%; height: 100%; object-fit: cover; background-position: center;" />
                </div>
                <div class="w-100" style="padding: 80px 30px;">
                    <div class="heading_s1 mb-3 heading_light">
                        <h3 class="text_default text-center" style="font-size: 40px;">JUMP START</h3>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="ml-3">
                                <img src="{{ asset('assets/frontend/images/programs/goal-setting-icon.png') }}" alt="{{ __('content.programs.text_goal_setting') }}" width="50" />
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 25px; color: black;">GOAL SETTING</h3>
                                <p class="mt-2" style="color: black;">Knowing your purpose.<br>Discovering your why</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-md-4 col-4">
                            <div class="ml-3">
                            <img src="{{ asset('assets/frontend/images/programs/eating-healthy-icon.png') }}" alt="{{ __('content.programs.text_eating_healthy') }}" width="50" />
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 25px; color: black;">EATING HEALTHY</h3>
                                <p class="mt-2" style="color: black;">You are what you eat.<br>Consuming healthily.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="ml-3">
                            <img src="{{ asset('assets/frontend/images/programs/workout-icon.png') }}" alt="{{ __('content.programs.text_workout') }}" width="50" />
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="heading_s1 mb-md-0 heading_light">
                                <h3 style="font-size: 25px; color: black;">WORKOUT</h3>
                                <p class="mt-2" style="color: black;">Getting a routine and <br> sticking to it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FUNCTIONAL BODY BUILDING -->
        <!-- START: YOU NEED A COACH -->
        <div class="section d-none d-xl-block">
            <div class="heading_s1 mb-md-0 heading_light text-right" style="padding-right: 50px;">
                <h3 class="text_default" style="font-size: 100px; letter-spacing: 15px;">YOU NEED A COACH!</h3>
            </div>
            <div class="row">
                <hr style="width: 75%; border-width: 2px; border-color: #C12435; text-align: right; margin-right: 0;">
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-4 col-md-4">
                    <img src="{{ asset('assets/frontend/images/programs/you-need-a-coach.png') }}" alt="{{ __('content.programs.text_you_need_a_coach') }}" style="width: 100%;" />
                </div>
                <div class="col-md-8 col-8" style="padding-right: 20px; padding-left: 200px;">
                    <div class="boxInfo">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3 style="font-size: 28px;" class="text_default">ACCOUNTABILITY AND MOTIVATION</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: black;">Coaches will challenge you to push beyond your limits and reach new levels of success provide ongoing support and guidance to ensure you stay on track towards achieving your goals</p>
                    </div>
                    <div class="boxInfo" style="margin-top: 100px;">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3 style="font-size: 28px" class="text_default">PERSONALIZED WORKOUT</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: black;">Coaches can provide Individualised workout program that takes into account your preferences, abilities, and fitness objectives to help you reach your full potential and achieve the results you desire.</p>
                    </div>
                    <div class="boxInfo" style="margin-top: 100px;">
                        <div class="heading_s1 mb-md-0 heading_light text-center">
                            <h3 class="text_default" style="font-size: 28px;">REDUCING POSSIBILITY OF INJURY</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: black;">Coaches are well versed in identifying which routines may be harmful to certain individuals and can provide modifications or alternatives to reduce the risk of injury</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="heading_s1 mb-md-0 heading_light text-right" style="padding: 0 20px;">
                <h3 class="text_default text-center" style="font-size: 35px;">YOU NEED A COACH!</h3>
            </div>
            <div class="row">
                <hr style="width: 75%; border-width: 2px; border-color: #C12435; text-align: right; margin-right: 0;">
            </div>
            <div class="row mt-4 align-items-center">
                <div class="col-sm-12" style="padding: 0 50px;">
                    <div class="boxInfo" style="padding: 10px;">
                        <div class="heading_s1 mb-md-0 heading_light text-center">
                            <h3 style="font-size: 20px;" class="text_default">ACCOUNTABILITY AND MOTIVATION</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: black;">Coaches will challenge you to push beyond your limits and
                            reach new levels of success provide ongoing support and guidance to ensure you stay on track towards achieving your goals</p>
                    </div>
                    <div class="boxInfo" style="margin-top: 100px; padding: 10px;">
                        <div class="heading_s1 mb-md-0 heading_light text-center">
                            <h3 class="text_default" style="font-size: 20px;">PERSONALIZED WORKOUT</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: black;">Coaches can provide Individualised workout program that takes
                            into account your preferences, abilities, and fitness objectives to help you reach your full potential and achieve the results you desire.</p>
                    </div>
                    <div class="boxInfo" style="margin-top: 100px; padding: 10px;">
                        <div class="heading_s1 mb-md-0 heading_light text-center">
                            <h3 class="text_default" style="font-size: 20px;">REDUCING POSSIBILITY OF INJURY</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: black;">Coaches are well versed in identifying which routines may be
                            harmful to certain individuals and can provide modifications or alternatives to reduce the risk of injury</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <img src="{{ asset('assets/frontend/images/programs/you-need-a-coach.png') }}" alt="{{ __('content.programs.text_you_need_a_coach') }}" style="width: 100%;" />
                </div>
            </div>
        </div>
        <!-- END: YOU NEED A COACH -->
        <!-- START: FOLLOW MCI -->
        <div class="section d-none d-xl-block">
            <div class="heading_s1 mb-md-0 heading_light" style="padding-left: 50px;">
                <h3 class="text_default" style="font-size: 85px; letter-spacing: 5px;">FOLLOW MCI</h3>
            </div>
            <div class="row" style="padding: 100px 100px;">
                <div class="col-md-12 col-12" style="padding: 0 100px;">
                    <div class="slantedBox2" style="padding: 10px 0;">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3 style="font-size: 28px;">Mechanics</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: white;">proper form and technique for exercises.<br> It is important to prioritize mechanics to ensure that<br> exercises are performed safely and effectively
                        </p>
                    </div>
                    <div class="slantedBox2" style="padding: 10px 0; margin-top: 100px;">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3 style="font-size: 28px;">Consistency</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: white;">frequency and regularity of training.<br> Consistent training is important to see progress and results</p>
                    </div>
                    <div class="slantedBox2" style="padding: 10px 0; margin-top: 100px;">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3 style="font-size: 28px;">Intensity</h3>
                        </div>
                        <p class="mt-2 ml-2" style="color: white;">effort and energy exerted during training.<br>It is important to maintain a certain level<br> of intensity during training to promote <br> progress and challenge the body</p>
                    </div>
                </div>
                <div style="position: absolute; top: 0; right: 0" class="d-flex justify-content-end">
                    <img src="{{ asset('assets/frontend/images/programs/follow-mci.png') }}" alt="{{ __('content.programs.text_follow_mci') }}" class="w-75" />
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="heading_s1 mb-md-0 heading_light" style="padding: 0 50px;">
                <h3 class="text_default text-center" style="font-size: 35px;">FOLLOW MCI</h3>
            </div>
            <div class="row" style="padding-left: 50px;">
                <div class="col-sm-12" style="padding-left: 70px;">
                    <div class="slantedBox3" style="padding: 10px;">
                        <div class="heading_s1 mb-md-0 heading_light text-right">
                            <h3 style="font-size: 20px;">Mechanics</h3>
                        </div>
                        <p class="mt-2 text-right" style="color: white;">proper form and technique for exercises. It is important to prioritize mechanics to ensure that exercises are performed safely and effectively</p>
                    </div>
                    <div class="slantedBox3" style="padding: 10px; margin-top: 100px;">
                        <div class="heading_s1 mb-md-0 heading_light text-right">
                            <h3 style="font-size: 20px">Consistency</h3>
                        </div>
                        <p class="mt-2 text-right" style="color: white;">frequency and regularity of training. Consistent training is important to see progress and results</p>
                    </div>
                    <div class="slantedBox3" style="padding: 10px; margin-top: 100px;">
                        <div class="heading_s1 mb-md-0 heading_light text-right">
                            <h3 style="font-size: 20px;">Intensity</h3>
                        </div>
                        <p class="mt-2 text-right" style="color: white;">effort and energy exerted during training. It is important to maintain a certain level of intensity during training to promote progress and challenge the body</p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/frontend/images/programs/follow-mci.png') }}" alt="{{ __('content.programs.text_follow_mci') }}" class="w-75" />
                </div>
            </div>
        </div>
        <!-- END: FOLLOW MCI -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/programs.css') }}" />
@endsection

@section('scripts')

@endsection
