@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
	<section class="sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-service-page-content">
						@if($data->page_thumbnail)
						<figure> <img src="{{asset('uploads/original/'.$data->page_thumbnail)}}" class="img-fluid" /> </figure>
						@endif
						<h3 class="mb-2">{{$data->post_title}}</h3>
						 {!!$data->post_content!!}
					</div>
					<!-- /.single-service-page-content -->
				</div>
				<!-- /.col-lg-8 -->
				<div class="col-lg-4">
					<div class="single-service-widget">
						 @if(has_posts($data->post_type)->count() > 0)
						<ul class="service-lists">
							@foreach(has_posts($data->post_type) as $row)
							<li class="{{(Request::segment(1) == geturl($row['uri'],$row['page_key']))?'active':''}}"><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{$row->post_title}}</a></li>
							@endforeach
						</ul>
						@endif
						<!-- /.service-lists -->
					</div>
					<!-- /.single-service-widget -->
				</div>
				<!-- /.col-lg-4 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.sec-pad -->
@endsection