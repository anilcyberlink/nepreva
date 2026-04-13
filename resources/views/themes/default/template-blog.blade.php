@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
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
<!-- blog-area-start -->
<div class="blog-area pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 mb-30">
                <div class="blog-wrapper mb-60">
                    <div class="blog-imgs">
                        <img src="{{ $data->banner ? asset('uploads/medium/'.$data->banner) : asset('themes-assets/img/picture/02.jpg')}}" alt="{{$data->post_title}}">
                    </div>
                    <div class="blog-text blog-02-text">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt"></i> <a>{{ $data->created_at->format('d F, Y')}}</a></span>
                        </div>
                        <h4>{{$data->post_excerpt}}</h4>

                        {!! $data->post_content !!}
                    </div>
                    <hr>
                </div>

            </div>
            <div class="col-lg-4 col-lg-4 mb-30" >

                <div style="position: sticky; top: 118px;">
                    @if($related_posts->count() > 0)
                        <div class="widget mb-40" >
                            <div class="widget-title-box mb-30">
                                <span class="animate-border"></span>
                                <h3 class="widget-title">Similar Blogs</h3>
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
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Share This:</h3>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area-end -->

@endsection
