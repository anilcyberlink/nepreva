<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts\PostModel;
use App\Models\Posts\PostCategoryModel;
use App\Models\Settings\SettingModel;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
       $recent_posts = PostModel::orderBy('id','desc')->take(10)->get();   
       $total_posts = PostModel::count();   
       $post_visiters = PostModel::sum('visiter');   
       $max_viewed = PostModel::orderBy('visiter','desc')->take(10)->get();   
       $total_category = PostCategoryModel::count();   
       $num_of_inquiries = SettingModel::first()->num_of_inquiries;
       return view('admin.dashboard',compact('recent_posts','total_posts','total_category','post_visiters','max_viewed','num_of_inquiries'));
    }
}
