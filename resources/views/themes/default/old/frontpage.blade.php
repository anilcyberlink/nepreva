@extends('themes.default.common.master')
@section('content')

<!-- Hero Slider -->
@if($banners->count() > 0)
    <section class="hero-slider style1">
    	<div class="home-slider">
    		<!-- Single Slider -->
    		@foreach ($banners as $row)
    			<div class="single-slider" style="background:linear-gradient(90deg,rgba(134, 20, 63, 0.88) 0%, rgba(242, 127, 58, 0.7) 50%, rgba(134, 20, 63, 0) 100%), url({{asset('uploads/banners/'.$row->picture)}});">
    				<div class="container text-center">
    					<div class="row">
    						<div class=" col-12">
    							<div class="welcome-text">
    								<div class="hero-text d-flex flex-column align-items-center">
    									<h4>{{$row->title}}</h4>
    									<p class="text-white mb-3 mt-3"><i>{{$row->caption}}</i></p>
    									<h1>{{$row->content}}</h1>
    									<!-- <div class="p-text">
    										<p>The company is committed to delivering innovative, efficient, and reliable solutions tailored to meet the unique needs of clients across various industries</p>
    									</div> -->
    									<div class="hero-div"></div>
    									
    									<div class="button">
    										<a href="{{ url('page/' . posttype_url($about->uri)) }}" class="Cyberlink-btn theme-2">Read More<i class="fa fa-angle-right"></i></a>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		@endforeach
    		<!--/ End Single Slider -->
    	</div>
    </section>
@endif
<!--/ End Hero Slider -->

<!-- About Us -->
<section class="about-us section-space">
	<div class="container">
		<div class="row">
			<div class=" col-md-6 col-12 d-flex align-items-center">
				<!-- About Video -->
				<div>
					<div class="experience-wrapper  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
						<div class="experience-badge">
							<div style="font-size: 2.5rem;">{{$setting->experience}}+</div>
							<div class="year-text">Years working<br>experience</div>
						</div>

						<div class="image-stack">
							<img src="{{$about->banner ? asset('uploads/medium/'.$about->banner) : asset('themes-assets/img/1d.jpg')}}" alt="Teamwork" class="uk-border-rounded base-image">
							<img src="{{$logistic->page_thumbnail ? asset('uploads/medium/'.$logistic->page_thumbnail) : asset('themes-assets/img/2.jpg')}}" alt="Discussion" class="uk-border-rounded top-image">
						</div>
					</div>

				</div>
				<!--/End About Video  -->
			</div>
			<div class="col-md-6 col-12">
				<div class="about-content section-title default text-left  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
					<div class="section-title">
						<h4>About Us</h4>
						<h2><b>{{$logistic->post_title}} </b></h2>
						<p class="text-secondary mb-3"><b>{{$logistic->post_excerpt}}</b></p>
					</div>
					<div class="section-bottom">
						<div class="text">
							<div class="text-justify line-six">{!! $logistic->post_content !!}</div>
						</div>
						<div class="row mt-4">
							<div class="col-sm-6">
								<div class="d-flex align-items-center">
									<img src="{{asset('themes-assets/img/mission.png')}}" alt="" style="height:50px;">
									<p class="mission-text ">{{$mission->post_title}}</p>
								</div>
								<div class="mt-2">
									<p>{{$mission->post_excerpt}}</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="d-flex align-items-center">
									<img src="{{asset('themes-assets/img/vision.png')}}" alt="" style="height:50px;">
									<p class="mission-text">{{$vision->post_title}}</p>
								</div>
								<div class="mt-2">
									<p>{{$vision->post_excerpt}}</p>
								</div>
							</div>
						</div>
						<div class="button">
							<a href="{{ url('page/' . posttype_url($about->uri)) }}" class="Cyberlink-btn theme-2">Read More<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End About Us -->

<!-- Services -->
<section class="services section-bg section-space">
	<div class="container">
		<div class="row">
			<div class="section-title text-center col-12 wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
				<h4>{{ $service->post_type }}</h4> <br>
				<h2><b>{{ $setting->welcome_text}}</b></h2>
			</div>
		</div>
		<div class="row mt-4 wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
			@foreach ($services as $row)
				<div class="col-md-6 p-2 ">
					<div class="card p-5" style="height :266px;">
						<div class="d-flex">
							<div class="services-img">
								<p>{{$loop->iteration}}</p>
							</div>
							<div class="services-text ml-4">
								<a href="{{url(geturl($row['uri'],$row['page_key']))}}">
									<h3>{{$row->post_title}}</h3>
								</a>
								</a>
								<p class="mt-3 mb-3 text-justify line-three">{{$row->post_excerpt}}</p>
								<div class="single-service">
									<a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="btn">Learn More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="button mt-4 text-center  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
			<a href="{{ url('page/' . posttype_url($service->uri)) }}" class="Cyberlink-btn theme-2">Read More<i class="fa fa-angle-right"></i></a>
		</div>
	</div>
</section>
<!--/ End Services -->
@if($blogs->count() > 0)
<!-- Services -->
<section class="services section-space bus-bg">
	<div class="container">
		<div class="row">
			<div class="section-title text-center col-12  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
				<h4>{{ $blog->post_type }}</h4> <br>
				<h2 class="text-white"><b>{{ $setting->title1}}</b></h2>
			</div>
		</div>
		<div class="row  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
			@foreach ($blogs as $row)
				<div class="col-lg-4 col-md-4 col-12">
					<!-- Single Service -->
					<div class="single-service">
						<div class="service-head">
							<a href="{{url(geturl($row['uri'],$row['page_key']))}}">
								<img src="{{$row->page_thumbnail ? asset('uploads/original/'.$row->page_thumbnail) : asset('themes-assets/img/1.jpg')}}" alt="#">
								<div class="icon-bg">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="service-content" style="height:195px;">
							<small><i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{ $row->created_at->format('d F, Y')}}</small>
							<h3><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{ $row->post_title }} </a></h3>
							<p class="line-three ">{{ $row->post_excerpt }}</p>
						</div>
					</div>
					<!--/ End Single Service -->
				</div>
			@endforeach
		</div>
		<div class="button mt-4 text-center  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
			<a href="{{ url('page/' . posttype_url($blog->uri)) }}" class="Cyberlink-btn theme-2">Read More<i class="fa fa-angle-right"></i></a>
		</div>
	</div>
</section>
@endif
<!--/ End Services -->
@if($galleries->count() > 0)
<div class="gallery section-space pb-4">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="section-title  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
					<h4>{{ $gallery->post_type }}</h4> <br>
					<h2><b>{{ $setting->title2 }}</b></h2>
					<div class="button mt-4 ">
						<a href="{{ url('page/' . posttype_url($gallery->uri)) }}" class="Cyberlink-btn theme-2">VIew All<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
					@foreach ($galleries as $row)
						@php
							$position = ($loop->iteration - 1) % 4;
						@endphp
						
						@if ($position == 0 || $position == 3)
							<div class="col-md-4 p-1 ">
								<a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="gallery-img">
									<img src="{{ $row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('themes-assets/img/1.jpg')}}" alt="{{$row->post_title}}">
									<div class="overlaya">{{$row->post_title}}</div>
								</a>
							</div>
						@else
							<div class="col-md-8 p-1">
								<a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="gallery-img">
									<img src="{{ $row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('themes-assets/img/1.jpg')}}" alt="{{$row->post_title}}">
									<div class="overlaya">{{$row->post_title}}</div>
								</a>
							</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!-- Client Area -->
@if($partners)
<div class="clients section-bg mt-5">
	<div class="container">
		<div class="row  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
			<div class="col-12">
				<div class="partner-slider">
					@foreach ($partners as $row)
						<!-- Single client -->
						<div class="single-slider">
							<div class="single-client">
								<a target="_blank"><img src=" {{ asset('uploads/medium/' . $row->file_name)}} " alt="#"></a>
							</div>
						</div>
						<!--/ End Single client -->
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<!--/ End Client Area -->

@endsection