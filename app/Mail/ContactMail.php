<?php

namespace App\Mail;

use App\Models\Settings\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $setting;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->setting = SettingModel::find(1);
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Inquiry')
            ->view('emails.contact-mail', [
                'data' => $this->data,
                'setting' => $this->setting
            ]);
    }
}
