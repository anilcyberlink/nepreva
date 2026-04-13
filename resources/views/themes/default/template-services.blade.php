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
                    <ul class="breadcrumb-menu mb-3">
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><span>{{$pos_type->post_type}}</span></li>
                    </ul>
                    <h1>{{$data->post_title}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- case-details-area-start -->
<div class="case-details-area pt-130 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 mb-30">
                <div class="case-details-wrapper">
                    <div class="case-details-img mb-50">
                        <img src="{{ $data->page_thumbnail ? asset('uploads/medium/'.$data->page_thumbnail) : asset('themes-assets/img/picture/03.jpg') }}" alt="{{$data->post_title}}">
                    </div>
                    <div class="row mb-40">
                        <div class="col-xl-12 mb-30">
                            <div class="case-details-text">
                                {!! $data->post_content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-lg-4 mb-30">
                @if($related_posts->count() > 0)
                    <div class="widget mb-40" style="position: sticky; top: 118px;">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Similar Services</h3>
                        </div>
                        <ul class="recent-posts">
                            @foreach ($related_posts as $row)
                                <li>
                                    <div class="widget-posts-image">
                                        <a href="{{url(geturl($row['uri'],$row['page_key']))}}"><img src="{{ $row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('themes-assets/img/picture/01.jpg') }}" alt="{{$row->post_title}}"></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <h6 class="widget-posts-title"><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{ $row->post_title }}</a></h6>
                                        <div class="widget-posts-meta">{{ $row->post_excerpt }} </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- case-details-area-end -->

@endsection
