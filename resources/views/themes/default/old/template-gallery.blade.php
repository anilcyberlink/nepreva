@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
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
                                <li class="active"><a>{{$pos_type->post_type}}</a></li>
                            </ul>
                        </div>
                        <!-- Bread Title -->
                        <div class="bread-title  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
                            <h1>{{$data->post_title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / End Breadcrumb -->

    <!-- Blog Layout -->
    <section class="services section-space">
        <div class="container">
            @if ($multiphotos->count() > 0)
                <div class="row  wow animate__fadeInUp"  data-wow-duration="1s"  data-wow-offset="50">
                    <div class="col-md-12">
                        <div class="row" >
                            @foreach ($multiphotos as $row)
                                <div class="col-md-4 p-1 mb-3">
                                    <a href="{{asset('uploads/medium/' . $row->file_name)}}" data-fancybox class="gallery-img">
                                        <img src="{{asset('uploads/medium/' . $row->file_name)}}" alt="{{$row->title}}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! $multiphotos->links('themes.default.common.pagination') !!}
            @else
                <div class="uk-section uk-text-center"> Coming Soon... </div>
            @endif
        </div>
    </section>

@endsection