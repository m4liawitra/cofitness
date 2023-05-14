@extends('frontend.layout.default')

@section('title', __('content.about.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" id="skewedBG">
        <div class="content">
            <h2 class="mb-2 font-weight-bold" style="font-size: 80px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">ABOUT</h2>
            <h2 class="font-weight-bold" style="font-size: 80px; color: white;">CO FITNESS</h2>
        </div>
        <div class="contentSkew"></div>
    </div>
    <div class="slantedDiv1 d-block d-sm-none" id="skewedBG1">
        <div class="content1">
            <h2 class="mb-2 font-weight-bold" style="font-size: 38px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">ABOUT</h2>
            <h2 class="font-weight-bold" style="font-size: 38px; color: white;">CO FITNESS</h2>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: ABOUT -->
        <div class="section pt-0 pb-0 d-none d-xl-block">
            <div id="about">ABOUT</div>
            <div class="row align-items-center" style="padding: 20px 100px;">
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2 class="text_default" style="font-size: 80px;letter-spacing: 3px">ABOUT US</h2>
                    </div>
                    <p>Co Fitness is a health and fitness lifestyle center offering club membership to its clientele. With modern facilities and high-technology gym equipment. We provide end-to-end fitness and wellness solutions, backed by professional coaches and personal trainers with proven fitness programs that guarantee result.</p>
                    <p>We are an inclusive facility where everyone is welcomed to become a member; regardless  of age, gender, preference, body size and shape.</p>
                    <p>Co Fitness is healthy place <span class="text_default">where every body fits.</span></p>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/about/about-01.png') }}" alt="{{ __('content.about.text_about') }}" />
                    </div>
                </div>
            </div>
            <div class="row"  style="padding: 20px 90px 0px;">
                <div class="about_img scene mb-4 mb-lg-0 mr-3">
                    <img src="{{ asset('assets/frontend/images/about/about-02.png') }}" alt="{{ __('content.about.text_about') }}" />
                </div>
                <div class="about_img scene mb-4 mb-lg-0">
                    <img src="{{ asset('assets/frontend/images/about/about-03.png') }}" alt="{{ __('content.about.text_about') }}" />
                </div>
            </div>
        </div>
        <div class="section pb-0 d-block d-sm-none">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2 class="text_default text-center" style="font-size: 30px;">ABOUT US</h2>
                    </div>
                    <div style="padding: 0 20px;">
                        <p class="text-justify" style="color: black;">Co Fitness is a health and fitness lifestyle center offering club membership to its clientele. With modern facilities and high-technology gym equipment. We provide end-to-end fitness and wellness solutions, backed by professional coaches and personal trainers with proven fitness programs that guarantee result.</p>
                        <p style="color: black;" class="text-justify">We are an inclusive facility where everyone is welcomed to become a member; regardless  of age, gender, preference, body size and shape.</p>
                        <p style="color: black;" class="text-justify">Co Fitness is healthy place <span class="text_default">where every body fits.</span></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/about/about-01.png') }}" alt="{{ __('content.about.text_about') }}" />
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 20px 90px 0;">
                <div class="about_img scene mb-4 mb-lg-0 mr-3">
                    <img src="{{ asset('assets/frontend/images/about/about-02.png') }}" alt="{{ __('content.about.text_about') }}" />
                </div>
                <div class="about_img scene mb-4 mb-lg-0">
                    <img src="{{ asset('assets/frontend/images/about/about-03.png') }}" alt="{{ __('content.about.text_about') }}" />
                </div>
            </div>
        </div>
        <!-- END: ABOUT -->
        <!-- START: MISSION -->
        <div class="section pt-0 d-none d-xl-block" style="padding-bottom: 100px">
            <div id="mission">MISSION</div>
            <div id="mission1">MISSION</div>
            <div id="mission2">MISSION</div>
            <div id="mission3">MISSION</div>
            <div class="row align-items-center" style="padding: 20px 200px 50px;">
                <div class="col-lg-10">
                    <div class="heading_s1">
                        <h2 class="text_default mb-4" style="font-size: 80px; letter-spacing: 3px;">MISSION</h2>
                    </div>
                    <p style="margin-top:80px;letter-spacing: 3px; color: black;">Our mission at Co Fitness Gym is to empower individuals to transform their lives through fitness, community, and holistic well-being. We strive to create a welcoming and inclusive environment where people of all ages, fitness levels and backgrounds can come together to achieve their health and fitness goals. We are dedicated to providing top-quality facilities, innovative fitness programs and personalized coaching to help our members lead healthier, happier and more fulfilling lives.</p>
                </div>
                <div class="col-lg-5 d-flex justify-content-end" style="position:absolute;top:-300px;right: 0;padding-bottom: 100px">
                    <div class="mb-4 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/about/mission.png') }}" alt="{{ __('content.about.text_about') }}" alt="{{ __('content.about.text_mission') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row align-items-center">
                <div class="col-lg-2 col-sm-12" style="padding: 0 20px;">
                    <div class="heading_s1">
                        <h2 class="text_default text-justify text-center" style="font-size: 60px; letter-spacing: 3px;">MISSION</h2>
                    </div>
                    <div style="padding: 0 20px">
                        <p class="text-justify" style="color: black" >Our mission at Co Fitness Gym is to empower individuals to transform their lives through fitness, community, and holistic well-being. We strive to create a welcoming and inclusive environment where people of all ages, fitness levels and backgrounds can come together to achieve their health and fitness goals. We are dedicated to providing top-quality facilities, innovative fitness programs and personalized coaching to help our members lead healthier, happier and more fulfilling lives.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                    <div class="about_img scene mb-4 mb-lg-0" style="padding: 0 20px;">
                        <img src="{{ asset('assets/frontend/images/about/mission.png') }}" alt="{{ __('content.about.text_about') }}" alt="{{ __('content.about.text_mission') }}" />
                    </div>
                </div>
            </div>
        </div>
        <!-- END: MISSION -->
        <!-- START: VISION -->
        <div class="section d-none d-xl-block pb-3">
            <div id="vision">VISION</div>
            <div id="vision1">VISION</div>
            <div class="row" style="padding: 0 100px 20px;">
                <div class="col-lg-8" style="padding-top: 50px">
                    <div class="heading_s1" style="margin-bottom: 50px">
                        <h2 class="text_default" style="font-size: 80px; letter-spacing: 3px;">VISION</h2>
                    </div>
                    <p style="letter-spacing: 3px; color: black;">To be the preferred fitness and wellness brand known for: </p>
                    <ul>
                        <li style="letter-spacing: 3px; color: black;">specialized and science-based programs and services</li>
                        <li style="letter-spacing: 3px; color: black;">certified professional trainers and instructors recognized as industry experts</li>
                        <li style="letter-spacing: 3px; color: black;">warm community of health and wellness advocates and enthusiast</li>
                        <li style="letter-spacing: 3px; color: black;">modern facilities and high-technology equipment</li>
                        <li style="letter-spacing: 3px; color: black;">engaging and friendly managements and staffs</li>
                    </ul>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/about/vision.png') }}" alt="{{ __('content.about.text_vision') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none">
            <div class="row align-items-center">
                <div class="col-lg-7 col-sm-12" style="padding: 0 50px;">
                    <div class="heading_s1">
                        <h2 class="text_default text-center" style="font-size: 60px; letter-spacing: 3px;">VISION</h2>
                    </div>
                    <p  class="text-justify" style="color: black;">To be the preferred fitness and wellness brand known for: </p>
                    <ul>
                        <li style="color: black;">specialized and science-based programs and services</li>
                        <li style="color: black;">certified professional trainers and instructors recognized as industry experts</li>
                        <li style="color: black;">warm community of health and wellness advocates and enthusiast</li>
                        <li style="color: black;">modern facilities and high-technology equipment</li>
                        <li style="color: black;">engaging and friendly managements and staffs</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-12 d-flex justify-content-center" style="padding: 0 20px;">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="{{ asset('assets/frontend/images/about/vision.png') }}" alt="{{ __('content.about.text_vision') }}" />
                    </div>
                </div>
            </div>
        </div>
        <!-- END: VISION -->
        <!-- START: MEET THE TEAM -->
        <div class="section d-none d-xl-block pb-0">
            <div class="row justify-content-center" style="padding: 20px 100px;">
                <div class="col-lg-6">
                    <div class="heading_s1 text-center" style="border-top: solid 2px #C12435; border-bottom: solid 2px #C12435;">
                        <h2 class="d-flex align-items-center justify-content-center" style="font-size: 70px; font-weight: 900;"> MEET <span class="text_default mx-3" style="font-size: 40px; font-weight: 600;">the</span> TEAM </h2>
                        <p class="text-center mb-0">RESPONSIBLE FOR MAKING THE CO FITNESS HAPPEN</p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 100px 0;">
                <div class="contentSkew1"></div>
                <div class="col-lg-4">
                    <div class="about_img scene mb-4 mb-lg-0 d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/images/about/anton-sieterales.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" width="355" />
                    </div>
                    <div class="my-4 d-flex justify-content-center">
                        <a class="btn btn-sm btn-fill-line" href="#">LEARN GRIN METHOD</a>
                    </div>
                    <div class="about_img scene mb-4 mb-lg-0 d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/images/about/barbell.jpg') }}" alt="{{ __('content.about.text_meet_the_team') }}" width="355" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="heading_s1">
                        <h2 >ANTON SIETERALES</h2>
                        <p class="mb-0" style="border-bottom: solid 2px #C12435; width: 50%;">ORIGINATOR OF GRIN METHOD</p>
                    </div>
                    <p style="color: black;">Anton Sietereales III is a highly experienced CrossFit coach and a professional functional fitness athlete.</p>
                    <p style="color: black;">In 2011, Anton discovered CrossFit while recovering from an injury that brought his body weight to 240 lbs. A female athlete who was doing Crossfit defeated him in a workout challenge. From that point, he got interested in Crossfit and started his colorful career as a professional fitness coach.</p>
                    <p style="color: black;">Among the highlights of Anton's fitness career was becoming a CrossFit L1 Coach last 2014. He also served as coach for the Philippine Obstacle Racers Team and as head coach for some of the gyms that he helped set up in various locations within Metro Manila. As an athlete, Anton has joined several CrossFit competitions in the Philippines and other countries such as Hong Kong, Malaysia, Indonesia, Brunei, and as far as Russia.</p>
                    <p style="color: black;">At the height of the 2020 pandemic, Anton designed a Functional Bodybuilding programming to help coaches affected by the closure of gym businesses have a full-time income. Using CrossFit as a methodology, Anton's Grin Method was born. The Grin Method is a well-rounded approach to physical fitness through functional movements and exercises to enhance one's body composition, athletic abilities, and overall physique.</p>
                    <p style="color: black;">Anton is known for his emphasis on training and education, especially for his team of coaches, in order to continuously improve their craft. He also instills discipline in his clients and trains them in a way so that they can also do it on their own.</p>
                    <p style="color: black;">Anton has been working in the fitness industry for over 10 years now. He thrives not only as a professional functional fitness athlete and coach but also as a businessman, having signed exclusive distributorship rights with Metcon, the maker of world-class endurance machines, weightlifting bars, and other functional training and gym equipment. He is also managing Metcon Group PH, his own gym located in Pasig City, catering to professional athletes, everyday fitness enthusiasts, and even celebrities.</p>
                    <ul class="social_icons">
                        <li><a href="{{ __('content.about.social.facebook') }}" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                        <li><a href="{{ __('content.about.social.instagram')[0] }}" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.viber')[1] }}" title="{{ __('labels.common.social.viber') }}" target="_blank"><img src="{{asset('assets/common/images/social/viber.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.twitter')[1] }}" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.tiktok') }}" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.telegram') }}" title="{{ __('labels.common.social.telegram') }}" target="_blank"><img src="{{asset('assets/common/images/social/telegram.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.whatsapp') }}" title="{{ __('labels.common.social.whatsapp') }}" target="_blank"><img src="{{asset('assets/common/images/social/whatsapp.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.youtube') }}" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section d-none d-xl-block pt-0 pb_70 ">
            <div id="trainers">TRAINERS</div>
            <div id="trainers1">TRAINERS</div>
            <div class="row justify-content-center mt-5" style="padding: 20px 100px;">
                <div class="col-lg-6">
                    <div class="heading_s1 text-center">
                        <h2 class="d-flex align-items-center justify-content-center" style="font-size: 50px;"> MEET OUR EXPERIENCED TRAINER </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 20px 120px;">
                <div class="col-lg-6 col-sm-6">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 300px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-01.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 300px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-02.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mt-5">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 300px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-03.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mt-5">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 300px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-04.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section d-block d-sm-none pb_70 ">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-12" style="padding: 0 50px;">
                    <div class="heading_s1 text-center py-2" style="border-top: solid 2px #C12435; border-bottom: solid 2px #C12435;">
                        <h2 class="d-flex align-items-center justify-content-center" style="font-size: 40px; font-weight: 900;"> MEET <span class="text_default mx-3" style="font-size: 30px; font-weight: 600;">the</span> TEAM </h2>
                        <p class="text-center mb-0">RESPONSIBLE FOR MAKING THE CO FITNESS HAPPEN</p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0 50px;">
                <div class="col-lg-6">
                    <div class="about_img scene mb-4 mb-lg-0 d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/images/about/anton-sieterales.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" width="355" />
                    </div>
                    <div class="my-4 d-flex justify-content-center">
                        <a class="btn btn-sm btn-fill-out" href="#">LEARN GRIN METHOD</a>
                    </div>
                    <div class="about_img scene mb-4 mb-lg-0 d-flex justify-content-center">
                        <img src="{{ asset('assets/frontend/images/about/barbell.jpg') }}" alt="{{ __('content.about.text_meet_the_team') }}" width="355" />
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="heading_s1">
                        <h2>ANTON SIETERALES</h2>
                        <p class="mb-0" style="border-bottom: solid 2px #C12435; color: black;">ORIGINATOR OF GRIN METHOD</p>
                    </div>
                    <p style="color: black;">Anton Sietereales III is a highly experienced CrossFit coach and a professional functional fitness athlete.</p>
                    <p style="color: black;">In 2011, Anton discovered CrossFit while recovering from an injury that brought his body weight to 240 lbs. A female athlete who was doing Crossfit defeated him in a workout challenge. From that point, he got interested in Crossfit and started his colorful career as a professional fitness coach.</p>
                    <p style="color: black;">Among the highlights of Anton's fitness career was becoming a CrossFit L1 Coach last 2014. He also served as coach for the Philippine Obstacle Racers Team and as head coach for some of the gyms that he helped set up in various locations within Metro Manila. As an athlete, Anton has joined several CrossFit competitions in the Philippines and other countries such as Hong Kong, Malaysia, Indonesia, Brunei, and as far as Russia.</p>
                    <p style="color: black;">At the height of the 2020 pandemic, Anton designed a Functional Bodybuilding programming to help coaches affected by the closure of gym businesses have a full-time income. Using CrossFit as a methodology, Anton's Grin Method was born. The Grin Method is a well-rounded approach to physical fitness through functional movements and exercises to enhance one's body composition, athletic abilities, and overall physique.</p>
                    <p style="color: black;">Anton is known for his emphasis on training and education, especially for his team of coaches, in order to continuously improve their craft. He also instills discipline in his clients and trains them in a way so that they can also do it on their own.</p>
                    <p style="color: black;">Anton has been working in the fitness industry for over 10 years now. He thrives not only as a professional functional fitness athlete and coach but also as a businessman, having signed exclusive distributorship rights with Metcon, the maker of world-class endurance machines, weightlifting bars, and other functional training and gym equipment. He is also managing Metcon Group PH, his own gym located in Pasig City, catering to professional athletes, everyday fitness enthusiasts, and even celebrities.</p>
                    <ul class="social_icons text-center">
                        <li><a href="{{ __('content.about.social.facebook') }}" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                        <li><a href="{{ __('content.about.social.instagram')[0] }}" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.viber')[1] }}" title="{{ __('labels.common.social.viber') }}" target="_blank"><img src="{{asset('assets/common/images/social/viber.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.twitter')[1] }}" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.tiktok') }}" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.telegram') }}" title="{{ __('labels.common.social.telegram') }}" target="_blank"><img src="{{asset('assets/common/images/social/telegram.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.whatsapp') }}" title="{{ __('labels.common.social.whatsapp') }}" target="_blank"><img src="{{asset('assets/common/images/social/whatsapp.png')}}" width="100"/></a></li>
                        <li><a href="{{ __('content.about.social.youtube') }}" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-5" >
                <div class="col-lg-6 col-sm-12" style="padding: 0 30px;">
                    <div class="heading_s1 text-center">
                        <h2 style="font-size: 40px;"> MEET OUR EXPERIENCED TRAINER </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding: 0 20px;">
                <div class="col-lg-6 col-sm-12">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 200px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-01.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons social_style1">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 200px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-02.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons social_style1">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 200px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-03.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons social_style1">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="team_box team_style1" style="border-radius: 200px;">
                        <div class="team_img" style="height: 200px;">
                            <img src="{{ asset('assets/frontend/images/about/trainer-04.png') }}" alt="{{ __('content.about.text_meet_the_team') }}" style="object-fit: cover; height: 100%;" />
                            {{--
                            <ul class="social_icons social_style1">
                                <li><a href="#" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/common/images/social/facebook.png')}}" width="100"/> </a></li>
                                <li><a href="#" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/common/images/social/instagram.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/common/images/social/twitter.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/common/images/social/tiktok.png')}}" width="100"/></a></li>
                                <li><a href="#" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/common/images/social/youtube.png')}}" width="100"/></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: MEET THE TEAM -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/about.css') }}" />
@endsection

@section('scripts')

@endsection
