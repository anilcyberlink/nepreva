<?php

namespace App\Mail;

use App\Models\Settings\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $data = SettingModel::where('id',1)->first();
        // dd($request->all(), $data);
        $email = $request->email;
        return $this->view('emails.contact-mail', [
            'data' => $data,
            'request' => $request
        ])->subject('Inquiry')->to($data->email_primary);
    }
}
