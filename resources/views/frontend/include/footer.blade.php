<!-- START: FOOTER > DESKTOP -->
<footer class="footer d-none d-xl-block">
    <div class="footer_top py-3">
        <div class="row align-items-center" style="padding: 20px 50px;">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="footer_logo">
                        <a href="#"><img src="{{ asset('assets/common/images/logo.png') }}" alt="{{ env('APP_NAME') }}" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pl-5">
                <div class="widget">
                    <p style="color: black;font-weight: 600">{{ __('content.common.address') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pl-5">
                <div class="widget">
                    <ul class="contact_info contact_info_light">
                        <li class="mb-0">
                            <p class="mb-0" style="color: black;font-weight: 600">{{ __('labels.common.globe') }}: {{ __('content.common.contact.globe') }}</p>
                        </li>
                        <li class="mb-0">
                            <p class="mb-0" style="color: black;font-weight: 600">{{ __('labels.common.smart') }}: {{ __('content.common.contact.smart') }}</p>
                        </li>
                        <li class="mb-0">
                            <p class="mb-0" style="color: black;font-weight: 600">{{ __('content.common.contact.email') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-end">
                <div class="widget">
                    <div class="footer_logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/footer/qr-code.png') }}" alt="{{ env('APP_NAME') }}" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer py-0 border-top-tran" >
        <div class="row">
            <div class="col">
                <div class="footer-m1" style="padding: 14px 100px;">
                    <p class="text-center text-md-left text-white mb-0" style="font-weight: 600">Copyright &copy; 2023 CoFitness. All Rights Reserved</p>
{{--                    <p class="text-center text-md-left text-white mb-0">Copyright &copy; {{ __('content.common.copyright') }}</p>--}}
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col text-right">
                <div class="footer-m" style="padding: 10px 100px;">
                    <ul class="social_icons social_white">
                        <li><a href="{{ __('content.common.social.facebook') }}"><img src="{{asset('assets/frontend/images/footer/facebook-app-symbol.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.instagram') }}"><img src="{{asset('assets/frontend/images/footer/instagram.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.telegram') }}"><img src="{{asset('assets/frontend/images/footer/telegram.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.tiktok') }}"><img src="{{asset('assets/frontend/images/footer/tik-tok.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.twitter') }}"><img src="{{asset('assets/frontend/images/footer/twitter.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.viber') }}"><img src="{{asset('assets/frontend/images/footer/viber.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.whatsapp') }}"><img src="{{asset('assets/frontend/images/footer/whatsapp.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.youtube') }}"><img src="{{asset('assets/frontend/images/footer/youtube.png')}}" width="90%"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: FOOTER > DESKTOP -->
<!-- START: FOOTER > MOBILE -->
<footer class="footer d-block d-sm-none">
    <div class="footer_top py-3">
        <div class="row align-items-center" style="padding: 20px 50px;">
            <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                <div class="widget">
                    <div class="footer_logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/footer/qr-code.png') }}" alt="{{ env('APP_NAME') }}" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                <div class="widget">
                    <p class="text-center" style="color: black;">{{ __('content.common.address') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 d-flex justify-content-center">
                <div class="widget">
                    <ul class="contact_info contact_info_light">
                        <li class="mb-0">
                            <p class="mb-0 text-center" style="color: black;">{{ __('labels.common.globe') }}: {{ __('content.common.contact.globe') }}</p>
                        </li>
                        <li class="mb-0">
                            <p class="mb-0 text-center" style="color: black;">{{ __('labels.common.smart') }}: {{ __('content.common.contact.smart') }}</p>
                        </li>
                        <li class="mb-0">
                            <p class="mb-0 text-center" style="color: black;">{{ __('content.common.contact.email') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer py-0 border-top-tran" >
        <div class="row">
            <div class="col-sm-7 p-0" style="width: 70%;">
                <div class="footer-m1" style="padding: 14px 0;">
                    <p class="text-center text-md-left text-white mb-0">&copy; {{ __('content.common.copyright') }}</p>
                </div>
            </div>
            <div class="col-sm" style="width: 10%;"></div>
            <div class="col-sm-4 text-right" style="width: 20%;">
                <div class="footer-m2" style="padding: 26px 0;"></div>
            </div>
        </div>
    </div>
</footer>
<!-- START: FOOTER > MOBILE -->
