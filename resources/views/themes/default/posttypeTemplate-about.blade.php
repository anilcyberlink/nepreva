@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
	<div class="breadcrumbs overlay" style="background-image:url('{{$data->banner ? asset('uploads/medium/'.$data->banner) : asset('themes-assets/img/1.jpg')}}')">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<!-- Bread Menu -->
						<div class="bread-menu  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
							<ul>
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="active"><a>{{$data->post_type}}</a></li>
							</ul>
						</div>
						<!-- Bread Title -->
						<div class="bread-title  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
							<h1>{{$data->uid}}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@foreach ( $posts->take(2) as $post )
		@if ($loop->iteration == 1 )
			<section class="about-us section-space pb-5">
				<div class="container">
					<div class="row  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
						<div class=" col-md-6 col-12 d-flex align-items-center">
							<!-- About  -->
							<div>
								<div class="experience-wrapper">
									<div class="experience-badge">
										<div style="font-size: 2.5rem;">{{$setting->experience}}+</div>
										<div class="year-text">Years working<br>experience</div>
									</div>
		
									<div class="image-stack">
										<img src="{{$post->banner ? asset('uploads/medium/'.$post->banner) : asset('themes-assets/img/1.jpg')}}" alt="Teamwork" class="uk-border-rounded base-image">
										<img src="{{$post->page_thumbnail ? asset('uploads/medium/'.$post->page_thumbnail) : asset('themes-assets/img/2.jpg')}}" alt="Discussion" class="uk-border-rounded top-image">
									</div>
								</div>
		
							</div>
							<!--/End About  -->
						</div>
						<div class="col-md-6 col-12">
							<div class="about-content section-title default text-left">
								<div class="section-title">
									<h4>About Us</h4>
									<h2><b>{{$post->post_title}} </b></h2>
								</div>
								<div class="section-bottom">
									<div class="text">
										<div class="text-justify">
											{!! $post->post_content !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		@else
			<section class="section-space section-bg ">
				<div class="container ">
					<div class="row   wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
						<div class="col-md-6 col-12">
							<div class="section-title">
								<!--<h4>Our Services</h4>-->
								<h2><b>{{$post->post_title}} </b></h2>
							</div>
							<div class="text-justify ">
								{!! $post->post_content !!}
							</div>
						</div>
						<div class=" col-md-6 col-12 d-flex align-items-center">
							<!-- About Video -->
							<div>
								<div class="experience-wrapper">
									<div class="image-stack">
										<img src="{{$post->banner ? asset('uploads/medium/'.$post->banner) : asset('themes-assets/img/1.jpg')}}" alt="Teamwork" class="uk-border-rounded base-image">
										<img src="{{$post->page_thumbnail ? asset('uploads/medium/'.$post->page_thumbnail) : asset('themes-assets/img/2.jpg')}}" alt="Discussion" class="uk-border-rounded top-image">
									</div>
									<div class="button text-center" style="margin-top:48px;">
										<a href="{{ url('page/' . posttype_url('services')) }}" class="Cyberlink-btn theme-2">Learn More About Our Services<i class="fa fa-angle-right"></i></a>
									</div>
								</div>
		
							</div>
							<!--/End About Video  -->
						</div>
					</div>
				</div>
			</section>
		@endif
	@endforeach

	<section class=" section-space pt-5">
		<div class="container">
			<div class="row mt-3  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
				@foreach ($posts->skip(2) as $post)
					<div class="col-sm-6 ">
						<div class="section-bg  p-5 mt-3">
							<div class="d-flex align-items-center">
								@if ($loop->first)
									<img src="{{ asset('themes-assets/img/mission.png') }}" alt="" style="height:50px;">
								@else
									<img src="{{ asset('themes-assets/img/vision.png') }}" alt="" style="height:50px;">
								@endif
								<p class="mission-text">{{$post->post_title}}</p>
							</div>
							<div class="mt-2">
								<div class="text-justify">
									{!! $post->post_content !!}
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection