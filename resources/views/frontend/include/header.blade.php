<!-- START: LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END: LOADER -->
<!-- START: HEADER > DESKTOP -->
<header class="header_wrap fixed-top header_with_topbar p-0 d-none d-xl-block">
    <div class="top-header p-0">
        <div class="row align-items-center">
            <div class="col">
                <div class="header-m1 d-flex align-items-center justify-content-md-start" style="height: 50px;"></div>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <div class="header-m d-flex align-items-center justify-content-end text-md-right" style="height: 50px;"></div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <nav class="navbar navbar-expand-lg px-3">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/common/images/logo.png') }}" alt="{{ env('APP_NAME') }}" width="240" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                <span class="ion-android-menu"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a class="nav-link nav_item" href="{{ route('home') }}">{{ Str::upper(__('content.home.title')) }}</a></li>
                    <li><a class="nav-link nav_item" href="{{ route('content.about') }}">{{ Str::upper(__('content.about.title')) }}</a></li>
                    <li><a class="nav-link nav_item" href="{{ route('content.services') }}">{{ Str::upper(__('content.services.title')) }}</a></li>
                    <li><a class="nav-link nav_item" href="{{ route('content.programs') }}">{{ Str::upper(__('content.programs.title')) }}</a></li>
                    <li><a class="nav-link nav_item" href="{{ route('content.features') }}">{{ Str::upper(__('content.features.title')) }}</a></li>
                    <li><a class="nav-link nav_item" href="{{ route('blog') }}">{{ Str::upper(__('content.blog.title')) }}</a></li>
                    <li><a class="nav-link nav_item" href="{{ route('contact') }}">{{ Str::upper(__('content.contact.title')) }}</a></li>
                </ul>
            </div>
            {{--
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript: void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier text-danger"></i></a>
                    <div class="search_wrap">
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <form>
                            <input type="text" placeholder="{{ __('labels.button.search') }}" class="form-control" id="search_input">
                            <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div><div class="search_overlay"></div>
                </li>
                <li><a class="nav-link nav_item btn btn-outline-danger py-2 px-3" style="border-radius: 50px;" href="{{ route('register') }}">{{ __('labels.button.register') }}</a></li>
            </ul>
            --}}
        </nav>
    </div>
</header>
<!-- END: HEADER > DESKTOP -->
<!-- START: HEADER > MOBILE -->
<header class="header_wrap fixed-top header_with_topbar p-0 d-block d-sm-none">
    <div class="top-header p-0">
        <div class="row align-items-center py-2 pl-4 bg_default">
            <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#menu">
                <span class="ion-android-menu" style="font-size: 30px; color: white;"></span>
            </button>
            <div class="modal" id="menu" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="menu" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-sm-down" role="document">
                    <div class="modal-content modal-content1">
                        <div class="d-flex justify-content-start pl-3 pt-3">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fa fa-times" aria-hidden="true" style="color: #C12435; font-size: 40px;"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="navbar-nav">
                                <li><a style="font-size: 20px; font-weight: 800; letter-spacing: 3px;" class="nav-link nav_item" href="{{ route('home') }}">{{ Str::upper(__('content.home.title')) }}</a></li>
                                <li><a style="font-size: 20px; font-weight: 800; letter-spacing: 3px;" class="nav-link nav_item" href="{{ route('content.about') }}">{{ Str::upper(__('content.about.title')) }}</a></li>
                                <li><a style="font-size: 20px; font-weight: 800; letter-spacing: 3px;" class="nav-link nav_item" href="{{ route('content.services') }}">{{ Str::upper(__('content.services.title')) }}</a></li>
                                <li><a style="font-size: 20px; font-weight: 800; letter-spacing: 3px;" class="nav-link nav_item" href="{{ route('content.programs') }}">{{ Str::upper(__('content.programs.title')) }}</a></li>
                                <li><a style="font-size: 20px; font-weight: 800; letter-spacing: 3px;" class="nav-link nav_item" href="{{ route('content.features') }}">{{ Str::upper(__('content.features.title')) }}</a></li>
                                <li><a style="font-size: 20px; font-weight: 800; letter-spacing: 3px;" class="nav-link nav_item" href="{{ route('blog') }}">{{ Str::upper(__('content.blog.title')) }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center  justify-content-end py-2 pr-4 bg_dark">
            <button class="navbar-toggler" type="button">
                <a href="{{ route('contact') }}">
                    <span class="ion-android-call" style="font-size: 30px; color: white;"></span>
                </a>
            </button>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <nav class="navbar navbar-expand-lg px-3 d-flex justify-content-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/common/images/logo.png') }}" alt="{{ env('APP_NAME') }}" width="240" />
            </a>
        </nav>
    </div>
</header>
<!-- END: HEADER > MOBILE -->