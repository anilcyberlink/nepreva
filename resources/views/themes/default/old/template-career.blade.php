@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('{{$data->banner ? asset('uploads/medium/'.$data->banner) : asset('themes-assets/img/1.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <!-- Bread Menu -->
                        <div class="bread-menu  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active"><a>{{$pos_type->post_type}}</a></li>
                            </ul>
                        </div>
                        <!-- Bread Title -->
                        <div class="bread-title  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
                            <h1>{{$data->post_title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->

    <!-- Services -->
    <section class="services  section-space">
        <div class="container">
            <div class="row  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
                <div class="d-flex flex-column" style="width:100%">
                    @php $i = 0; @endphp
                    <nav>
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                            @foreach ($associated_posts as $row)
                                <button class="nav-link mt-2 {{ $i === 0 ? 'active' : '' }}" id="tab-{{ $i }}-tab" data-toggle="tab" data-target="#tab-{{ $i }}" type="button" role="tab" aria-controls="tab-{{ $i }}" aria-selected="{{ $i === 0 ? 'true' : 'false' }}">
                                    {{ $row->title }}
                                </button>
                                @php $i++; @endphp
                            @endforeach
                        </div>
                    </nav>

                    <div class="tab-content container" id="nav-tabContent">
                        @php $i = 0; @endphp
                        @foreach ($associated_posts as $row)
                            <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}" id="tab-{{ $i }}" role="tabpanel" aria-labelledby="tab-{{ $i }}-tab">
                                <div class="card my-4 p-4 list-style">
                                    {!! $row->brief !!}
                                </div>
                            </div>
                            @php $i++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4  wow animate__fadeInUp" data-wow-duration="1s" data-wow-offset="50">
                    <div class="col-md-12 p-2 card p-5 section-bg">
                        <form action="{{ route('sendmail_resume') }}" method="POST" enctype="multipart/form-data" class="uk-grid-small" uk-grid>
                            @csrf
                            <input type="hidden" id="g_recaptcha_response2" name="g_recaptcha_response2"/>
                            <input type="hidden" id="position" name="position" value="{{$data->post_title}}"/>
                            <input type="hidden" name="type" value="{{$data->sub_title}}"/>
                        
                            <div class="mb-3">
                                <div class="section-title text-left">
                                    <h2 style="font-size: 22px;">Apply Now</h2>
                                    <p class="fw-bold text-muted">*Please fill in the required information</p>
                                </div>
                            </div>
                        
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label fw-bold">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                                </div>
                        
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label fw-bold">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                                </div>
                        
                                <div class="col-md-6 mt-3">
                                    <label for="email" class="form-label fw-bold">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                        
                                <div class="col-md-6 mt-3">
                                    <label for="contact" class="form-label fw-bold">Contact *</label>
                                    <input type="text" class="form-control" id="contact" name="contact" required>
                                </div>
                        
                                <div class="col-md-6 mt-3">
                                    <label for="cv" class="form-label fw-bold">Upload your CV *</label>
                                    <div class="d-flex align-items-center">
                                        <input type="file" class="form-control me-3" id="cv" name="cv" style="width: 55%;" accept=".doc,.docx,.pdf" required>
                                        <small class="text-muted">Upload your CV (doc, docx, pdf)</small>
                                    </div>
                                </div>
                        
                                <div class="col-md-6 mt-3">
                                    <label for="cover_letter" class="form-label fw-bold">Upload your Cover Letter *</label>
                                    <div class="d-flex align-items-center">
                                        <input type="file" class="form-control me-3" id="cover_letter" name="cover_letter" style="width: 55%;" accept=".doc,.docx,.pdf" required>
                                        <small class="text-muted">Upload your Cover Letter (doc, docx, pdf)</small>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="mt-4">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" ></textarea>
                            </div>
                        
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="agree" name="agree_terms" required>
                                <label class="form-check-label" for="agree">
                                    I agree to the Logistics Terms and Conditions and Privacy Policy.
                                </label>
                            </div>
                        
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Services -->

    <script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>
    <script>
        grecaptcha.ready(function () {
            function executeRecaptcha() {
                grecaptcha.execute('<?php echo env("SITE_KEY"); ?>', {action: 'homepage'}).then(function (token) {
                    document.getElementById('g_recaptcha_response2').value = token;
                });
            }
    
            // Initial execution of reCAPTCHA
            executeRecaptcha();
    
            // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
            setInterval(executeRecaptcha, 900000);
        });
    
    </script>
@endsection