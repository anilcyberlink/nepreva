<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
	<title>EASTERN HORIZON LOGISTICS</title>

	<!-- Favicon -->
	<link rel="icon" type="{{ asset('themes-assets/image/favicon.png')}}" href="{{ asset('themes-assets/img/favicon.png')}}">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

	<!-- Cyberlink Plugins CSS -->
	<link rel="stylesheet" href="{{ asset('themes-assets/css/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/magnific-popup.min.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/owl-carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/slicknav.min.css')}}">

	<!-- Cyberlink Stylesheet -->
	<link rel="stylesheet" href="{{ asset('themes-assets/css/reset.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('themes-assets/css/responsive.css')}}">

	<style>
        /********* google captcha *********/
      .grecaptcha-badge{
          display: none!important;
      }
    </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body id="bg">
	@include('themes.default.common.response')
	<!-- Boxed Layout -->
	<div id="page" class="site boxed-layout">

		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact">
								    <a href="tel:+1234567890"><i class="fa fa-phone"></i>Phone: {{$setting->phone}}</a>
								<i class="fa fa-whatsapp ml-3" aria-hidden="true"></i>WhatsApp: {{$setting->phone2}}
							</div>
							</div>
							<!-- End Top Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: {{$setting->email_primary}}</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo" >
												<a href="{{ url('/') }}">
													<img src="{{asset('themes-assets/img/logo.jpg')}}" alt="Logistic">
												</a>
											</div>
										</div>
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">
													<div class="nav-inner">
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="{{ url('/') }}">Home</a></li>
																@foreach ($navigations as $row)
																	@if ($row->id != '2')
																		<li><a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a></li>
																	@else
																		<li><a href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }} <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
																			<ul class="sub-menu">
																				@foreach ($services as $service)
																					<li><a href="{{url(geturl($service['uri'],$service['page_key']))}}">{{$service->post_title}} </a></li>
																				@endforeach
																			</ul>
																		</li>
																	@endif
																@endforeach
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->

		</header>
		<!--/ End Header -->