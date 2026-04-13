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

	<!-- Blog Layout -->
	<section class="services section-space">
		<div class="container">
			<div class="row  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
				@foreach ($posts as $row)
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<a href="{{url(geturl($row['uri'],$row['page_key']))}}">
									<img src="{{$row->page_thumbnail ? asset('uploads/original/'.$row->page_thumbnail) : asset('themes-assets/img/1.jpg')}}" alt="{{$row->post_title}}">
									<div class="icon-bg">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</div>
								</a>
							</div>
							<div class="service-content"  style="height:195px;">
								<small><i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{ $row->created_at->format('d F, Y')}}</small>
								<h3><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{$row->post_title}} </a></h3>
								<p class="line-three ">
									{{$row->post_excerpt}}
								</p>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
				@endforeach
			</div>
			<div class="button mt-4 text-center d-flex justify-content-center">
				{!! $posts->links('themes.default.common.pagination') !!}
			</div>
		</div>
	</section>
@endsection