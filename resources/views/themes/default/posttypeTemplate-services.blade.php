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
                        <li><span>{{ $data->uid }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular-services-start -->
<div class="popular-services-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="area-title-blue text-center mb-70 pr-50 pl-50 wow fadeIn" data-wow-delay=".3s" data-wow-duration=".3">
                    <h1>Excellent Service Provide For Business</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $row)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="p-services-wrapper mb-30 wow flipInX" data-wow-delay=".3s" data-wow-duration=".3">
                        <div class="p-services-img">
                            <img src="{{ $row->banner ? asset('uploads/medium/'.$row->banner) :  asset('themes-assets/img/picture/01.jpg')}}" alt="{{$row->post_title}}">
                            <div class="p-services-text">
                                <div class="p-services-icon">
                                    <!-- <i class="fal fa-chart-line"></i> -->
                                </div>
                                <h4>{{$row->post_title}}</h4>
                                <p>{{ $row->post_excerpt }}</p>
                                <a href="{{ url(geturl($row['uri'],$row['page_key'])) }}">read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $posts->links('themes.default.common.pagination') !!}
    </div>
</div>
<!-- popular-services-end -->

@endsection
