@extends('frontend.layout.default')

@section('title', __('content.contact.title'))

@section('content')
    @include('frontend.include.header')

    <!-- START: MAIN BANNER -->
    <div class="slantedDiv d-none d-xl-block" id="skewedBG">
        <div class="content">
            <div>
                <h2 class="mb-2 font-weight-bold" style="font-size: 80px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">CONTACT</h2>
                <h2 class="font-weight-bold" style="font-size: 80px; color: white;">US</h2>
            </div>
        </div>
    </div>
    <div class="slantedDiv1 d-block d-sm-none" id="skewedBG1">
        <div class="content1">
            <h2 class="mb-2 font-weight-bold" style="font-size: 38px; -webkit-text-fill-color: transparent; -webkit-text-stroke: 2px white;">CONTACT</h2>
            <h2 class="font-weight-bold" style="font-size: 38px; color: white;">US</h2>
        </div>
    </div>
    <!-- END: MAIN BANNER -->
    <!-- START: MAIN CONTENT -->
    <div class="main_content">
        <!-- START: CONTACT -->
        <div id="section-contact" class="section pt-0">
            <div class="container">
                <!-- START: CONTACT FORM -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-xl-12 col-md-12">
                            <h2 class="leads text-center" style="color: black; font-weight: 700;">Contact us today to get support you need on your fitness journey!</h2>
                            <div class="field_form py-4">
                                <form name="form_contact" action="{{ route('contact.send') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <img src="{{ asset('assets/frontend/images/contact/fullname.png') }}" alt="{{ __('labels.contact.form.fullname') }}" />
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" name="name" id="input-contact-firstname" class="form-control" placeholder="{{ __('labels.contact.form.fullname_placeholder') }} *" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <img src="{{ asset('assets/frontend/images/contact/email.png') }}" alt="{{ __('labels.contact.form.email') }}" />
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="email" name="email" id="input-contact-email" class="form-control" placeholder="{{ __('labels.contact.form.email_placeholder') }} *" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <img src="{{ asset('assets/frontend/images/contact/message.png') }}" alt="{{ __('labels.contact.form.message') }}" />
                                        </div>
                                        <div class="form-group col-md-10">
                                            <textarea name="message" id="input-contact-message" class="form-control" placeholder="{{ __('labels.contact.form.message_placeholder') }} *" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3 d-flex justify-content-center">
                                            <button type="submit" name="submit" id="btn-contact-submit" class="btn btn-fill-out" title="{{ __('labels.contact.button.send_message') }}">{{ __('labels.contact.button.send_message') }}</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="alert-contact" class="alert-msg text-center"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: CONTACT FORM -->
                <!-- START: GOOGLE MAP -->
                <div class="row">
                    <div class="col-lg-12 pt-2 mt-4">
                        <div id="map" class="contact_map2" data-zoom="12" data-latitude="40.680" data-longitude="-73.945" data-icon="{{ asset('assets/common/images/map/marker.png') }}"></div>
                    </div>
                </div>
                <!-- END: GOOGLE MAP -->
            </div>
        </div>
        <!-- END: CONTACT -->
        <!-- START: SUBSCRIBE -->
        <div id="section-subscribe" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-xl-12 col-md-12">
                            <h2 class="leads text-center" style="color: black; font-weight: 700;">Never miss out on latest news updates, special offers and service from Co Fitness Gym</p>
                            <div class="field_form">
                                <form name="form_subscribe" action="{{ route('contact.subscribe') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12 text-center">
                                            <input type="email" name="email" id="input-subscribe-email" class="form-control" placeholder="{{ __('labels.contact.form.email_placeholder') }} *" />
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="submit" name="submit" title="{{ __('labels.contact.button.subscribe') }}" class="btn btn-fill-out">{{ __('labels.contact.button.subscribe') }}</button>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="alert-subscribe" class="alert-msg text-center"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SUBSCRIBE -->
    </div>
    <!-- END: MAIN CONTENT -->

    @include('frontend.include.footer')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/contact.css') }}" />
@endsection

@section('scripts')
    @include('common.notify')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-vWeirMt40tspYcEZDG0n-cJ3O00TON8&callback=initMap"></script>
@endsection