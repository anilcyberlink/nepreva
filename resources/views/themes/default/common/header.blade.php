<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nepreva</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes-assets/img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('themes-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/responsive.css') }}">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes-assets/rs/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes-assets/rs/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes-assets/rs/css/navigation.css') }}">


    <!-- Toastr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>

    <!-- preloader -->
    <!--<div id="preloader">-->
    <!--    <div class="preloader">-->
    <!--        <span></span>-->
    <!--        <span></span>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- preloader end  -->

    <!-- header-start -->
    @include('themes.default.common.response')
    <header class="header-default">

        <div id="sticky-header" class="main-menu-area" style="padding: 7px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 d-flex align-items-center">
                        <div class="logo w-100 text-start text-md-start text-lg-start">
                            <a href="{{ url('/')}}" class="d-inline-block">
                                <img
                                    src="{{ asset('themes-assets/img/Neprivalogo.jpeg') }}"
                                    alt="Nepriva Logo"
                                    class="img-fluid"
                                    style="max-height: 50px;"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="menu-bar f-right d-none d-lg-block">
                            <a class="info-bar" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                        </div>
                        <div class="main-menu text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="{{ url('/')}}">home </a> </li>
                                    @foreach ($navigations as $row)
                                        @if ($row->id != '2')
                                            <li><a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a> </li>
                                        @else
                                            <li>
                                                <a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}<i class="far fa-angle-down"></i>
                                                </a>
                                                <ul class="sub-menu text-left">
                                                    @foreach ($services as $service)
                                                        <li><a href="{{url(geturl($service['uri'],$service['page_key']))}}">{{$service->post_title}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="{{ url('/')}}">
                    <img src="{{ asset('themes-assets/img/Neprivabglogo.png') }}" alt="Nepreva" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>{{ $setting->address }}</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>{{ $setting->phone }}</p>
                    <p>{{ $setting->phone2 }}</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>{{ $setting->email_primary }}</p>
                    <p>{{ $setting->email_secondary }}</p>
                </div>
            </div>

            <div class="social-icon-right mt-20">
                <a href="{{$setting->facebook_link}}">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{$setting->twitter_link}}">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="{{$setting->linkedin_link}}">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="{{$setting->instagram_link}}">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </header>
    <!-- header-start -->
