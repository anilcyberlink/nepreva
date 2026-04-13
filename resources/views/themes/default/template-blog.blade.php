@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
@section('content')
    <!-- Service Single -->
    <section class="service-single section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Service Image -->
                    <div class="service-img">
                        <img src="{{ $data->banner ? asset('uploads/medium/'.$data->banner) : asset('themes-assets/img/1.jpg')}}" alt="{{$data->post_title}}">
                    </div>
                    <!-- Service Content -->
                    <div class="service-content mt-3">
                        <small><i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{ $data->created_at->format('d F, Y')}}</small>
                        <h2 class="mt-0">{{$data->post_excerpt}}</h2>
                        {!! $data->post_content !!}
                        <hr>
                    </div>
                    <div class="share-this mt-5 d-flex">
                        <p class="mr-2">
                            <b>Share This Blog:</b>
                        </p>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Service Sidebar -->
                    <div class="service-sidebar">
                        <!-- Single Sidebar -->
                        <div class="service-single-sidebar widget">
                            <h2 class="widget-title">Related Blog</h2>
                            <div class="menu-service-menu-container list-style">
                                <!-- Service Menu -->
                                <ul id="menu-service-menu" class="menu">
                                    @foreach ($related_posts as $row)
                                        <li ><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{$row->post_title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar -->
                    </div>
                    <!--/ End Service Sidebar -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Services -->
@endsection