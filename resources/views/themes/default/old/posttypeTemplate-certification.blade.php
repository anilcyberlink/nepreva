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
			<div class="col-12">
			    @if($posts->count() > 0)
    				<ul class="list-unstyled mt-4  download section-bg p-5  ">
    					@foreach ($posts as $row)
    						<li class="mb-3">
    							<div>
    								<a class="fw-bold text-dark fs-5 d-inline-flex align-items-center mb-0">
    									{{$row->post_title}}
    								</a>
    								@if ($row->icon)
    									<div class="text-primary fs-6 fw-semibold mt-2 mb-2 download-list">
    										<a href="{{ asset('uploads/medium/' . $row->icon) }}" class="text-decoration-none" download>
    											Download File <i class="fa fa-download" aria-hidden="true"></i>
    										</a>
    										<a href="{{ asset('uploads/medium/' . $row->icon) }}" target="_blank">
    											View File <i class="fa fa-eye" aria-hidden="true"></i>
    										</a>
    									</div>
    								@endif
    							</div>
    						</li>
    						<hr>
    					@endforeach
        			</ul>
            	@else
            	    <h1>Coming Soon...</h1>
            	@endif
			</div>
		</div>
	</div>
</section>

@endsection