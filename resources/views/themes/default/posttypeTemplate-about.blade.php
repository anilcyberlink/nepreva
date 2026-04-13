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
<!-- breadcrumb-area-start -->

<!-- who we are - start -->
@foreach ( $posts->take(2) as $post )
    @if ($loop->iteration == 1 )
        <div class="we-are-area grey-2-bg pt-100 pb-65">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="we-are-wrapper wow fadeIn m-0" data-wow-delay=".3s" data-wow-duration=".3">
                            <div class="we-are-text">
                                <span>{{ $post->post_title }}</span>
                                <h1>{{ $post->post_excerpt }}</h1>
                                {!! $post->post_content !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="we-are-img bounce-animate">
                            <img src="{{ $post->banner ? asset('uploads/medium/'.$post->banner) : asset('themes-assets/img/picture/02.jpg')}}" alt="{{ $post->post_title }}" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
	@else
        <div class="we-are-area pt-100 pb-65">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="we-are-img bounce-animate">
                            <img src="{{ $post->banner ? asset('uploads/medium/'.$post->banner) : asset('themes-assets/img/picture/01.jpg')}}" alt="{{ $post->post_title }}" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="we-are-wrapper wow fadeIn m-0" data-wow-delay=".3s" data-wow-duration=".3">
                            <div class="we-are-text">
                                <span>{{ $post->post_title }}</span>
                                <h1>{{ $post->post_excerpt }}</h1>
                                {!! $post->post_content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
<!-- mission/vision-end -->

@endsection
