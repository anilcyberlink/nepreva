<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Inquiry</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif; background:#f4f6f8;">

    <div
        style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.05);">

        <!-- HEADER -->
        <div style="background:#0d6efd; padding:20px; text-align:center;">
            <a href="{{ url('/') }}">
                <img src="{{ asset('themes-assets/img/Neprivalogo.jpeg') }}" style="max-width:150px;">
            </a>
            <h2 style="color:#ffffff; margin:10px 0 0;">New Contact Inquiry</h2>
        </div>

        <!-- BODY -->
        <div style="padding:25px;">

            <p style="margin-bottom:20px; color:#555;">
                You have received a new inquiry from your website.
            </p>

            <table style="width:100%; border-collapse:collapse; font-size:14px;">
                <tr>
                    <td style="padding:10px; background:#f1f1f1; width:30%;"><strong>Full Name</strong></td>
                    <td style="padding:10px;">{{ $data->full_name }}</td>
                </tr>
                <tr>
                    <td style="padding:10px; background:#f1f1f1;"><strong>Email</strong></td>
                    <td style="padding:10px;">{{ $data->email }}</td>
                </tr>
                <tr>
                    <td style="padding:10px; background:#f1f1f1;"><strong>Phone</strong></td>
                    <td style="padding:10px;">{{ $data->number }}</td>
                </tr>

                @if($data->country)
                    <tr>
                        <td style="padding:10px; background:#f1f1f1;"><strong>Address</strong></td>
                        <td style="padding:10px;">{{ $data->country }}</td>
                    </tr>
                @endif

                <tr>
                    <td style="padding:10px; background:#f1f1f1;"><strong>Message</strong></td>
                    <td style="padding:10px;">{!! nl2br(e($data->message)) !!}</td>
                </tr>
            </table>

        </div>

        <!-- FOOTER -->
        <div style="background:#f9f9f9; padding:15px; text-align:center; font-size:13px; color:#777;">
            <p style="margin:5px 0;">{{ $setting->site_name }}</p>
            <p style="margin:5px 0;">{{ $setting->address }}</p>
            <p style="margin:5px 0;">
                📞 {{ $setting->phone }} | ✉ {{ $setting->email_primary }}
            </p>
            <p style="margin-top:10px;">
                <a href="{{ url('/') }}" style="color:#0d6efd; text-decoration:none;">Visit Website</a>
            </p>
        </div>

    </div>

</body>

</html>
