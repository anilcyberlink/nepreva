@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
	<!-- Breadcrumb -->
	<div class="breadcrumbs overlay" style="background-image:url('{{$data->banner ? asset('uploads/medium/'.$data->banner) : asset('themes-assets/img/1.jpg')}}')">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<!-- Bread Menu -->
						<div class="bread-menu  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
							<ul>
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="active"><a>{{$data->post_type}}</a></li>
							</ul>
						</div>
						<!-- Bread Title -->
						<div class="bread-title  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50"><h1>{{$data->uid}}</h1></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / End Breadcrumb -->

	<!-- Contact Us -->
	<section class="contact-us section-space">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="contact-box-main m-top-30  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
						<div class="contact-title">
							<h2>Contact us</h2>
							<p>{{$setting->welcome_title}}</p>
						</div>
						<!-- Single Contact -->
						<div class="single-contact-box d-flex">
							<div class="c-icon"><i class="fa fa-map-marker"></i></div>
							<div class="c-text">
								<h2>Address:</h2>
								<p> PO Box: {{$setting->address}}</p>
							</div>
						</div>
						<!--/ End Single Contact -->
						<!-- Single Contact -->
						<div class="single-contact-box d-flex">
							<div class="c-icon"><i class="fa fa-phone"></i></div>
							<div class="c-text">
								<h2>Call Us Now</h2>
								<p>Tel.: {{$setting->phone}}<br> Mob.: {{$setting->phone2}}</p>
							</div>
						</div>
						<!--/ End Single Contact -->
						<!-- Single Contact -->
						<div class="single-contact-box d-flex">
							<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
							<div class="c-text">
								<h2>Email Us</h2>
								<p>{{$setting->email_primary}}</p>
							</div>
						</div>
						<!--/ End Single Contact -->

					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-12 contact-form-area">
					<!-- Contact Form -->
					<div class="contact-box-main">
						<div class="contact-title">
							<h2>Contact us for inquiries</h2>
						</div>
					</div>
					<form action="{{ route('sendmail_contact') }}" method="POST" class="uk-grid-small" uk-grid>
						@csrf
						<input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
					
						<div class="row mb-3">
							<div class="col-md-6 mb-3 mb-md-0 faq-form">
								<input type="text" class="form-control" name="full_name" placeholder="Name" required>
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" placeholder="Email address" required>
							</div>
						</div>
					
						<div class="row mb-3">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" class="form-control" name="number" placeholder="Phone number" required>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class=" mb-3">
								<input type="text" class="form-control" name="country" placeholder="Country">
						</div>
					
						<div class="mb-3">
							<textarea class="form-control" name="message" rows="5" placeholder="Write message" ></textarea>
						</div>
					
						<button type="submit" class="btn btn-info text-white fw-semibold">Send A Message</button>
					</form>
					<!--/ End contact Form -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="contact-form-area m-top-30">
					    <div class="test-map">
					        <style>
    					        .test-map{
    					            margin:0;
    					            padding:0;
    					        }
					            .test-map *{
					                width:100%;
					                height:350px;
					            }
					        </style>
					        {!! $setting->google_map !!}
					    </div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->

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