@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-230 pb-235">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>{{ $data->post_type }}</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><span>{{$data->uid}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area-start -->
@if(!empty($posts))
    <div class="blog-area pt-125 pb-100">
        <div class="container">
            <div class="row">
                @foreach ($posts as $row)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-img">
                                <a href="{{url(geturl($row['uri'],$row['page_key']))}}"><img src="{{$row->page_thumbnail ? asset('uploads/original/'.$row->page_thumbnail) : asset('themes-assets/img/picture/02.jpg')}}" alt="{{$row->post_title}}"></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{ $row->created_at->format('j M Y') }}</a></span>
                                </div>

                                <h4><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{$row->post_title}}</a></h4>

                                <p class="three-line">{{$row->post_excerpt}}</p>

                                <a class="btn-border" href="{{url(geturl($row['uri'],$row['page_key']))}}">read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $posts->links('themes.default.common.pagination') !!}
        </div>
    </div>
@else
    <div>Comming Soon...</div>
@endif
<!-- blog-area-end -->

@endsection
