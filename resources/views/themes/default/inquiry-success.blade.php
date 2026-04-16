@extends('themes.default.common.master')

@section('content')

<section style="background:#f5f7fb; padding:50px 0;">
    <div class="container">

        <div style="max-width:520px; margin:0 auto;">
            <div style="
                background:#fff;
                border-radius:10px;
                padding:30px 25px;
                text-align:center;
                box-shadow:0 6px 18px rgba(0,0,0,0.08);
            ">

                <!-- ICON -->
                <div style="margin-bottom:15px;">
                    <div style="
                        width:60px;
                        height:60px;
                        margin:0 auto;
                        border-radius:50%;
                        background:#e6f9f0;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                    ">
                        <i class="fa fa-check" style="color:#28a745; font-size:26px;"></i>
                    </div>
                </div>

                <!-- TITLE -->
                <h3 style="font-weight:600; margin-bottom:8px;">
                    Inquiry Sent Successfully
                </h3>

                <p style="color:#777; font-size:14px; margin-bottom:20px;">
                    We’ve received your message.
                </p>

                <!-- MESSAGE -->
                <div style="
                    background:#f8f9fa;
                    border-radius:6px;
                    padding:15px;
                    margin-bottom:20px;
                    text-align:left;
                    font-size:14px;
                ">
                    <p style="margin-bottom:6px;">
                        Dear <strong>{{ $name }}</strong>,
                    </p>

                    <p style="margin:0;">
                        {!! $message !!}
                    </p>
                </div>

                <!-- FOOTER -->
                <p style="font-size:14px; margin-bottom:20px;">
                    Thank you,<br>
                    <strong>{{ $setting->site_name }}</strong>
                </p>

                <!-- BUTTON -->
                <a href="{{ url('/') }}" style="
                    display:inline-block;
                    padding:10px 22px;
                    background:#0d6efd;
                    color:#fff;
                    border-radius:25px;
                    text-decoration:none;
                    font-size:14px;
                    font-weight:500;
                ">
                    Back to Home
                </a>

            </div>
        </div>

    </div>
</section>

@endsection
