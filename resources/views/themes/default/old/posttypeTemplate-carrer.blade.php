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

	<section class="services section-bg section-space">
		<div class="container">
			<div class="row  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
				<div class="section-title text-left col-12 p-4">
					<h2><b> Open Positions </b></h2>
					<p>{!! $data->caption !!}</p>
				</div>
			</div>
			<div class="row mt-4  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
				<div class="col-md-12 p-2 ">
					<div class="card p-5 table-responsive">
						<table class="table align-middle">
							<thead class="thead-dark">
								<tr>
									<th>JOB TITLE</th>
									<th>DESCRIPTION</th>
									<th style="width:100px;">TYPE</th>
									<th>APPLY NOW</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($posts as $row)
									<tr>
										<td ><b>{{$row->post_title}}</b></td>
										<td>
											{{$row->post_excerpt}} 
										</td>
										<td> {{$row->sub_title}}</td>
										<td>
											<div>
												<a href="{{url(geturl($row['uri'],$row['page_key']))}}" class="Cyberlink-btn theme-5">Apply Now</a>
											</div>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
	
			</div>
		</div>
	</section>
@endsection