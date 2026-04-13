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
				<div class="col-md-12">
                    @if($posts->count() > 0)
					    <div class="row">
    						@foreach ($posts as $row)
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
                	@else
                	    <h1>Coming Soon...</h1>
                	@endif
				</div>
			</div>
		</div>
	</section>
@endsection