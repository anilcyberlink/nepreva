<?php

namespace App\Mail;

use App\Models\Settings\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $create;
    public $setting;

    public function __construct($create)
    {
        $this->create = $create; 
        $this->setting = SettingModel::find(1); 
    }

    public function build()
    {
        return $this->subject('Career')
            ->to($this->setting->email_primary)
            ->view('emails.career-mail', [
                'data' => $this->setting,
                'request' => $this->create, 
            ])
            ->attach(public_path('uploads/cv/' . $this->create->cv), [
                'as' => 'CV.pdf',
                'mime' => 'application/pdf',
            ])
            ->attach(public_path('uploads/coverletter/' . $this->create->cover), [
                'as' => 'CoverLetter.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
