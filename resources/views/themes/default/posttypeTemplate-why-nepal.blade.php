@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area">
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

<!-- why-nepal-area-start -->
<div class="features-area pt-125 pb-120">
    <div class="container">

        <!-- Intro Section -->
        <div class="row mb-5">
            <div class="col-xl-12 text-center">
                <div class="section-title">
                    <h2>{!! $data->caption !!}</h2>
                    {!! $data->content !!}
                </div>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="row wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".3s">
            <!-- Feature 1 -->
            @foreach ($posts as $row)
                <div class="col-xl-4 col-md-6 mb-5">
                    <div class="features-wrapper text-center">
                        <div class="features-img">
                            <img src="{{ $row->banner ? asset('uploads/medium/'.$row->banner) :  asset('themes-assets/img/picture/01.jpg')}}" alt="{{$row->post_title}}">
                        </div>
                        <div class="features-text">
                            <h4>{{$row->post_title}}</h4>
                            <p>
                                {{ $row->post_excerpt }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- why-nepal-area-end -->

@endsection
