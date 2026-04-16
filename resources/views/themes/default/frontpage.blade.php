@extends('themes.default.common.master')
@section('content')

<!-- slider start -->
<div class="hero-slider-area">
    <div id="rs_slider_wrapper_02" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-02"
        data-source="gallery"
        style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px; max-height: 580px;">
        <div id="rs_slider_02" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
            <ul>
                @foreach ($banners as $key => $row)
                    <li data-index="rs-{{ $key }}" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ $row->picture ? asset('uploads/banners/'.$row->picture) : asset('themes-assets/img/picture/03.jpg') }}"
                        data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <!-- MAIN IMAGE -->
                        <img src="{{ $row->picture ? asset('uploads/banners/'.$row->picture) : asset('themes-assets/img/picture/03.jpg') }}"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-no-retina>
                        <div class="overlay"></div>

                        <!-- GROUP LAYER -->
                        <div class="tp-caption rev_group" id="rs-layer-{{ $key }}"
                            data-x="['left','left','left','left']"
                            data-hoffset="['370','80','97','20']"
                            data-y="['top','top','top','top']"
                            data-voffset="['250','180','226','150']"
                            data-width="['800','800','800','800']"
                            data-height="220"
                            data-whitespace="nowrap"
                            data-type="group"
                            data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #222; letter-spacing: 0px;">

                            <!-- Caption Badge -->
                            <div class="tp-caption tp-resizeme"
                                id="rs-caption-{{ $key }}"
                                data-x="['left','left','left','left']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-110','-110','-110','-110']"
                                data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on" data-start="800"
                                data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[5,5,5,5]" data-paddingright="[10,10,10,10]"
                                data-paddingbottom="[5,5,5,5]" data-paddingleft="[10,10,10,10]"
                                data-fontsize="['13','13','13','13']"
                                data-lineheight="['22','22','22','22']"
                                style="z-index: 9; background: #1f80fd; padding: 6px 12px; white-space: nowrap; font-size: 13px; line-height: 22px; color: #fff; font-family:'Montserrat', sans-serif; font-weight: 700; text-transform: uppercase; border-radius: 5px;">
                                {{ $row->caption }}
                            </div>

                            <!-- Content Subtitle (below caption) -->
                            <div class="tp-caption tp-resizeme"
                                id="rs-content-{{ $key }}"
                                data-x="['left','left','left','left']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-70','-70','-70','-70']"
                                data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on" data-start="800"
                                data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-fontsize="['13','13','13','13']"
                                data-lineheight="['22','22','22','22']"
                                style="z-index: 9; white-space: nowrap; font-size: 13px; line-height: 22px; color: #fff; font-family:'Montserrat', sans-serif; font-weight: 600; text-transform: uppercase;">
                                {{ $row->content }}
                            </div>

                            <!-- Main Title -->
                            <div class="tp-caption NotGeneric-Title tp-resizeme"
                                id="rs-title-{{ $key }}"
                                data-x="['left','left','left','left']"
                                data-hoffset="['-2','-2','-2','-2']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['30','30','10','-20']"
                                data-width="['670','670','670','400']"
                                data-height="none" data-whitespace="normal" data-type="text"
                                data-responsive_offset="on"
                                data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="s:700;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-start="500" data-splitin="none" data-splitout="none"
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-fontsize="['50','45','38','28']"
                                data-lineheight="['58','52','46','36']"
                                style="z-index: 10; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 800; color: #fff; letter-spacing: 0px; font-family:'Montserrat', sans-serif;">
                                {{ $row->title }}
                            </div>

                        </div>
                        <!-- END GROUP LAYER -->

                        <!-- Learn More Button -->
                        @if($row->link)
                        <div class="tp-caption"
                            id="rs-btn-{{ $key }}"
                            data-x="['left','left','left','left']"
                            data-hoffset="['370','80','101','20']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['75','60','80','20']"
                            data-width="250" data-height="none"
                            data-whitespace="normal" data-type="text"
                            data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #444; letter-spacing: 0px; font-family:'Montserrat', sans-serif;">
                            <div class="bd-slider-button">
                                <a class="btn" href="{{ $row->link }}"
                                   style="font-size: 12px; padding: 8px 20px; line-height: 1.4; letter-spacing: 0.5px;">
                                    learn more <i class="far fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        @endif

                    </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</div>
<!-- slider end -->

<!-- scroll indicator -->
<div class="scroll-down-indicator">
    <div class="scroll-arrow" onclick="document.getElementById('popular-services').scrollIntoView({behavior: 'smooth'})">
        <i class="fas fa-chevron-down"></i>
    </div>
</div>
<!-- scroll indicator end -->

<!-- popular-services-start -->
@if($service)
<div class="popular-services-area pt-100 pb-100" id="popular-services">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="area-title-blue text-center mb-70 pr-50 pl-50 wow fadeIn" data-wow-delay=".3s" data-wow-duration=".3">
                    <span>popular services</span>
                    <h1>{{ $service->post_type }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $row)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="p-services-wrapper mb-30 wow flipInX" data-wow-delay=".3s" data-wow-duration=".3">
                        <div class="p-services-img">
                            <img src="{{ $row->page_thumbnail ? asset('uploads/medium/'.$row->page_thumbnail) : asset('themes-assets/img/picture/01.jpg')}}" alt="{{$row->post_title}}">
                            <div class="p-services-text">
                                <div class="p-services-icon">
                                    <!-- <i class="fal fa-chart-line"></i> -->
                                </div>
                                <h4>{{$row->post_title}}</h4>
                                <p>{{$row->post_excerpt}}</p>
                                <a href="{{url(geturl($row['uri'],$row['page_key']))}}">read more <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <div class="bd-slider-button">
                <a class="btn" href="{{ url('page/' . posttype_url($service->uri)) }}">learn more <i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endif
<!-- popular-services-end -->

<!-- we-are-area-start -->
@if(!empty($wwr))
    <div class="we-are-area grey-2-bg pt-115 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="we-are-wrapper wow fadeIn" data-wow-delay=".3s" data-wow-duration=".3">
                        <div class="we-are-text">
                            <span>{{ $wwr->post_title }}</span>
                            <h1>{{ $wwr->post_excerpt }}</h1>
                            <div class="clamp-4">
                                {!! $wwr->post_content !!}
                            </div>
                            <a class="btn" href="{{ url('page/' . posttype_url($about->uri)) }}">learn more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="we-are-img bounce-animate">
                        <img src="{{$about->banner ? asset('uploads/medium/'.$about->banner) : asset('themes-assets/img/picture/01.jpg')}}" alt="{{ $about->post_type }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endif
<!-- we-are-area-end -->

<!-- cta-area-start -->
@if(!empty($contact))
    <div class="cta-area pt-140 pb-110" style="background:linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.54) 100%),url({{$contact->banner ? asset('uploads/medium/'.$contact->banner) : asset('themes-assets/img/picture/04.jpg')}}); background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9 col-md-9">
                    <div class="cta-wrapper mb-30">
                        <div class="cta-content">
                            <span>meet with us</span>
                            <h1>{{ $contact->uid }}</h1>
                            <div class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <a class="btn" href="{{ url('page/' . posttype_url($contact->uri)) }}">meet with us <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-3">
                    <div class="cta-icon text-md-right mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".3">
                        <a href="tel:{{ $setting->phone}}"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- cta-area-end -->
<!-- blog-area-start -->
@if($blog)
<div class="blog-area pt-125 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-blog mb-30">
                    <div class="we-are-text">
                        <span>{{ $blog->post_type }}</span>
                        <h1>{{ $blog->uid }}</h1>
                        <p>{!! $blog->caption !!}</p>
                        <a class="btn" href="{{ url('page/' . posttype_url($blog->uri)) }}">view more <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
			@foreach ($blogs as $row)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30">
                        <div class="blog-img">
                            <a href="{{url(geturl($row['uri'],$row['page_key']))}}"><img src="{{$row->page_thumbnail ? asset('uploads/original/'.$row->page_thumbnail) : asset('themes-assets/img/picture/02.jpg')}}" alt="{{ $row->post_title }}"></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{ $row->created_at->format('j M Y') }}</a></span>
                            </div>
                            <h4><a href="{{url(geturl($row['uri'],$row['page_key']))}}">{{ $row->post_title }}</a></h4>
                            <p class="three-line">{{$row->post_excerpt}}</p>
                            <a class="btn-border" href="{{url(geturl($row['uri'],$row['page_key']))}}">read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- blog-area-end -->

@endsection
