@extends('themes.default.common.master')

@section('content')
<!-- start section -->
<section class="uk-section uk-booking bg-white uk-position-relative" style="background: #f2f2f2;">
    <div class="container"
         style="padding-top: 4rem; padding-bottom: 4rem;">
        
        <div class="card uk-border-rounded uk-box-shadow-medium section-title" style="background: #fff; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;    padding:  50px;">
            <div class="mb-4 text-center" >
                <i class="fa fa-check ml-3" aria-hidden="true" style="color: green;font-size: 70px; border-radius: 100%;border: 2px solid green; padding: 9px;"></i>
            </div>

            <h2 class="mb-4 text-center">Sent Successfully!</h2>

            <p class="text-bold">
                Dear <b>{{ $name }}</b>,
            </p>
            <br>

            <p>
                {!! $message !!}
            </p>
            <!--<p>Thank you for applying for the [Job Title] position at Eastern Horizon Logistics LLC. We appreciate your interest in joining our team and the time you took to submit your application. <br>Our team will review your application and qualifications carefully. If your profile matches our requirements, we will contact you for the next steps.</p>-->
            <p>Thank You</p>

            <hr class="uk-divider-icon">

            <p class="">
                <b>Best Wishes</b><br>
                {{ $setting->site_name }}
            </p>

            <div class="mt-4 text-center">
                <a href="{{ url('/') }}" class="Cyberlink-btn theme-2">Return to Home</a>
            </div>
        </div>

    </div>
</section>

<!-- end section -->
@stop
