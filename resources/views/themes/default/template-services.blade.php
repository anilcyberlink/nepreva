@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

<!-- Service Single -->
<section class="service-single section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <!-- Service Image -->
                <h2 class="mt-0 mb-4">{{$data->post_title}}</h2>
                <div class="service-img">
                    <img src="{{ $data->page_thumbnail ? asset('uploads/medium/'.$data->page_thumbnail) : asset('themes-assets/img/2.jpg')}}" alt="{{$data->post_title}}">
                </div>
                <!-- Service Content -->
                <div class="service-content mt-3 text-justify unset">
                    {!! $data->post_content !!}
                    <!--<style>-->
                    <!--    .unset ul{-->
                    <!--        padding:revert!important;-->
                    <!--        margin:revert!important;-->
                    <!--    }-->
                    <!--    .unset ul li{-->
                    <!--        list-style: disc!important;-->
                    <!--    }-->
                    <!--</style>-->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Service Sidebar -->
                <div class="service-sidebar">
                    <!-- Single Sidebar -->
                    <div class="service-single-sidebar widget">
                        <h2 class="widget-title">Related Services</h2>
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