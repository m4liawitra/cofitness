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
                    <p class="text-center text-md-left text-white mb-0" style="font-weight: 600">{{ __('content.common.copyright') }}</p>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col text-right">
                <div class="footer-m" style="padding: 10px 100px;">
                    <ul class="social_icons social_white">
                        <li><a href="{{ __('content.common.social.facebook') }}" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/facebook-app-symbol.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.instagram') }}" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/instagram.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.telegram') }}" title="{{ __('labels.common.social.telegram') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/telegram.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.tiktok') }}" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/tik-tok.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.twitter') }}" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/twitter.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.viber') }}" title="{{ __('labels.common.social.viber') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/viber.png')}}" width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.whatsapp') }}" title="{{ __('labels.common.social.whatsapp') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/whatsapp.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.youtube') }}" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/youtube.png')}}" width="90%"/></a></li>
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
            <div class="p-0" style="width: 85%;">
                <div class="footer-m1" style="padding: 14px 0;">
                    <p class="text-center text-md-left text-white mb-0">{{ __('content.common.copyright') }}</p>
                </div>
            </div>
            <div style="width: 15%;"></div>
            <div style="width: 15%;"></div>
            <div style="width: 85%;">
                <div class="footer-m2" style="padding: 10px 0;">
                    <ul class="social_icons social_white">
                        <li><a href="{{ __('content.common.social.facebook') }}" title="{{ __('labels.common.social.facebook') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/facebook-app-symbol.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.instagram') }}" title="{{ __('labels.common.social.instagram') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/instagram.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.telegram') }}" title="{{ __('labels.common.social.telegram') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/telegram.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.tiktok') }}" title="{{ __('labels.common.social.tiktok') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/tik-tok.png')}}" width="90%"/></a></li>
                        <li><a href="{{ __('content.common.social.twitter') }}" title="{{ __('labels.common.social.twitter') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/twitter.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.viber') }}" title="{{ __('labels.common.social.viber') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/viber.png')}}" width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.whatsapp') }}" title="{{ __('labels.common.social.whatsapp') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/whatsapp.png')}}"width="90%" /></a></li>
                        <li><a href="{{ __('content.common.social.youtube') }}" title="{{ __('labels.common.social.youtube') }}" target="_blank"><img src="{{asset('assets/frontend/images/footer/youtube.png')}}" width="90%"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- START: FOOTER > MOBILE -->
