<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    protected $table = 'cl_settings';
    protected $fillable = ['site_name','num_of_inquiries','phone','phone2','title1','title2','email_primary','email_secondary','website','address','facebook_link','linkedin_link','youtube_link','twitter_link','instagram_link','google_plus','meta_key','meta_description','google_map','welcome_title','welcome_text','copyright_text','experience'];
}
