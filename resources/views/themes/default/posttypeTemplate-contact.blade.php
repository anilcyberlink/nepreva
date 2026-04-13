@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-235">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>{{$data->post_type}}</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{url('/')}}">home</a></li>
                        <li><span>{{$data->uid}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area-start -->
<div class="contact-area pt-125 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="area-title-blue text-center pr-30 pl-30 mb-70 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                    <span>Message us</span>
                    <h1>Don't Hesitate To Contact With Us</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8 mb-30">
                <div class="contact-us-01-wrapper">
                    <form id="contacts-us-form" class="contacts-us-form" action="{{ route('sendmail_contact') }}" method="POST" >
                        @csrf
						<input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contacts-icon contactss-name">
                                    <input name="name" type="text" placeholder="Your Full Name.... " required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-icon contactss-address">
                                    <input name="address" type="text" placeholder="Your Address...." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-icon contactss-call">
                                    <input name="phone" type="text" placeholder="Your Phone Number...." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contacts-icon contactss-email">
                                    <input name="email" type="email" placeholder="Your Email...." required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contacts-icon contactss-message">
                                    <textarea name="message" id="comments" cols="30" rows="10" placeholder="Your Comments...." required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contacts-us-form-button">
                                    <button class="btn" type="submit">send message <i class="far fa-long-arrow-right"></i></button>
                                    <p class="ajax-response"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-30">
                <div class="contact-l-adddress-wrapper">
                    <ul class="contact-1-list-address">
                        <li>
                            <div class="contact-1-address-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-1-address-text">
                                <h3>Address</h3>
                                <p>{{ $setting->address }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-1-address-icon">
                                <i class="fal fa-envelope-open"></i>
                            </div>
                            <div class="contact-1-address-text">
                                <h3>Email Us</h3>
                                <p>{{ $setting->email_primary }} <br>{{ $setting->email_secondary }} </p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-1-address-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-1-address-text">
                                <h3>Call Us</h3>
                                <p>{{$setting->phone}}<br>{{$setting->phone2}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area-end -->
 <!-- map-area-start -->
<div class="map-area">
    <div class="map-wrapper">
        <div class="contact-map">
            <div style="position: relative;">
                <div class="test-map">
                    <style>
                        .test-map{
                            margin:0;
                            padding:0;
                        }
                        .test-map *{
                            width:100%;
                            height:550px;
                        }
                    </style>
					{!! $setting->google_map !!}
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- map-area-end -->

<script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>
<script>
    grecaptcha.ready(function () {
        function executeRecaptcha() {
            grecaptcha.execute('<?php echo env("SITE_KEY"); ?>', {action: 'homepage'}).then(function (token) {
                document.getElementById('g_recaptcha_response').value = token;
            });
        }

        // Initial execution of reCAPTCHA
        executeRecaptcha();

        // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
        setInterval(executeRecaptcha, 900000);
    });

</script>
@endsection
