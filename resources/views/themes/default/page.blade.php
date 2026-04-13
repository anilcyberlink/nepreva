@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
	<div class="inner-banner text-center">
		<div class="container">
			<ul class="breadcrumb">
				<li> <a href="{{url('/')}}">Home</a> </li>
				<li> <span>{{$data->post_type}}</span> </li>
			</ul>
			<!-- /.breadcrumb -->
			<h1>{{$data->post_type}}</h1> </div>
		<!-- /.container -->
	</div>
	<!-- /.inner-banner -->
	<section class="about-style-six sec-pad">
		<div class="container">
			<div class="row">
				 @if($data->banner)
				<div class="col-lg-6"> 
				<img src="{{asset(env('PUBLIC_PATH').'uploads/medium/' . $data->banner )}}" alt="Awesome Image" /> 
				</div>
				<div class="col-lg-6">
					 {!!$data->content!!} 
				</div>
				@else
				<div class="col-lg-12">
					<div class=" shadow-lg p-5">
						<p class="mb-0">  {!!$data->content!!} </p>
					</div>
				</div>
				@endif
				<!-- /.col-lg-5 -->
				
				<!-- /.col-lg-7 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.about-style-six -->
@endsection