<?php
namespace App\Http\Controllers\FrontendControllers;

use App\Mail\ContactMail;
use App\Models\Inquiry\CareerModel;
use App\Models\Inquiry\ContactModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banners\BannerModel;
use App\Models\MultipleBanners\MultipleBannerModel;
use App\Models\Posts\PostModel;
use App\Models\Posts\AssociatedPostModel;
use App\Models\Posts\PostCategoryModel;
use App\Models\Posts\PostImageModel;
use App\Models\Posts\PostDocModel;
use App\Models\Settings\SettingModel;
use App\Models\Galleries\ImageGalleryModel;
use App\Models\Galleries\ImageGalleryCategoryModel;
use App\Models\Galleries\VideoGalleryModel;
use Mail;
use App\Mail\SendMail;
use App\Mail\SendMailContact;
use App\Mail\SendResume;
use App\Mail\CareerApply;
use App\Mail\CareerMail;
use App\Models\Posts\PostTypeModel;
use Exception;
use Illuminate\Support\Str;

class FrontpageController extends Controller
{
    public function index()
    {
        $banners = BannerModel::all();
        $about = PostTypeModel::where('id', '1')->first();
        $service = PostTypeModel::where('id', '2')->first();
        $services = PostModel::where('post_type', '2')->take(4)->get();
        $blog = PostTypeModel::where('id', '3')->first();
        $blogs = PostModel::where('post_type', '3')->orderBy('created_at', 'desc')->take(3)->get();
        $gallery = PostTypeModel::where('id', '5')->first();
        $galleries = PostModel::where('post_type', '5')->orderBy('created_at', 'asc')->take(4)->get();
        $partner = PostModel::where('post_type', '8')->with('images')->first();
        $logistic = PostModel::where(['id' => '17', 'post_type' => $about->id])->first();
        $mission = PostModel::where(['id' => '6', 'post_type' => $about->id])->first();
        $vision = PostModel::where(['id' => '7', 'post_type' => $about->id])->first();
        $setting = SettingModel::where('id', 1)->first();

        return view('themes.default.frontpage', compact('banners', 'about', 'services', 'service', 'setting', 'logistic', 'mission', 'vision', 'blog', 'blogs', 'gallery', 'galleries'));
    }

    public function posttype($uri)
    {
        if (!check_posttype_uri($uri)) {
            abort(404);
        }
        $setting = SettingModel::where('id', 1)->first();
        $data = PostTypeModel::where('uri', $uri)->first();
        $tmpl['template'] = 'page';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }
        if ($data) {
            $posts = PostModel::where('post_type', $data->id)->orderBy('post_order', 'asc')->paginate(6);
        }
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        // dd($data, $posts, $setting);
        return view('themes.default.' . $data['template'] . '', compact('data', 'documents', 'posts', 'setting'));
    }

    public function pagedetail($uri)
    {
        if (!check_uri($uri)) {
            abort(404);
        }
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }

        if ($data->id) {
            $data->visiter = $data->visiter + 1;
            $data->save();
        }

        $pos_type = PostTypeModel::where('id', $data->post_type)->first();
        $data_child = PostModel::where('post_parent', $data['id'])->orderBy('post_order', 'desc')->paginate(12);
        $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        $related_posts = PostModel::where('post_type', $data->post_type)->where('id', '!=', $data->id)->orderBy('id', 'asc')->paginate(4);
        $multiphotos = $data->images()->orderBy('created_at', 'desc')->paginate(6);
        // dd( $data,$associated_posts,$pos_type);

        return view('themes.default.' . $data['template'] . '', compact('data', 'data_child', 'associated_posts', 'documents', 'pos_type', 'related_posts', 'multiphotos'));
    }

    public function pagedetail_child($parenturi, $uri)
    {
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();

        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }

        if ($data->id) {
            $data->visiter = $data->visiter + 1;
            $data->save();
        }

        $data_child = PostModel::where('id', $data['post_parent'])->first();
        if ($data_child) {

            $data['template'] = $data_child['template_child'];
        }
        $associated_posts = array();
        if ($data) {
            $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
        }
        $post_id = $data->id;
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        $pos_type = PostTypeModel::where('id', $data->post_type)->first();

        return view('themes.default.' . $data['template'] . '', compact('data', 'data_child', 'associated_posts', 'documents', 'pos_type'));
    }

    public function servicetype($category_uri)
    {
        $category = PostCategoryModel::where('uri', $category_uri)->first();
        if ($category) {
            $data = PostModel::where('post_category', $category->id)->orderBy('post_order', 'desc')->get();
            return view('themes.default.service-list', compact('data', 'category'));
        }
        return false;
    }

    public function apply($parenturi, $uri)
    {
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        if ($data) {
            return view('themes.default.apply', compact('data'));
        }
    }

    public function navigation($uri)
    {
        $getId = PostModel::where(['uri' => $uri])->first();
        $childCount = PostModel::where(['post_parent' => $getId->id])->count();
        if ($childCount > 0) {
            $parent_post = PostModel::where('uri', $uri)->first();
            $post = PostModel::where(['post_parent' => intval($getId->id)])->orderBy('post_order', 'asc')->paginate(15);
            $template = $parent_post->template;
        } else {
            $parent_post = PostModel::where('uri', $uri)->first();
            $post = PostModel::where('uri', $uri)->first();
            $template = $post->template;
            $news_updates = PostModel::where(['post_type' => 9])->orderBy('post_order', 'asc')->paginate(15);
        }
        $bod = PostModel::where(['post_type' => 12])->get();
        return view('themes.default.' . $template . '', compact('post', 'bod', 'parent_post', 'news_updates'));
    }

    public function category_navigation($uri)
    {
        $post_category = PostCategoryModel::where('uri', trim($uri))->first();
        if ($post_category->id == 2) {
            $data = PostModel::where(['post_category' => $post_category->id])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.completed', compact('data', 'post_category'));
        } else {
            $data = PostModel::where(['post_category' => $post_category->id])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.ongoing', compact('data', 'post_category'));
        }

    }

    /***********************************
     ******** Root Navigation ***********
     ************************************/

    public function photo_gallery($cat_id)
    {
        $data = ImageGalleryModel::where(['category_id' => $cat_id])->get();
        $cat = ImageGalleryCategoryModel::where(['id' => $cat_id])->first();
        return view('themes.default.photo_gallery_thumbnail', compact('data', 'cat'));
    }

    public function sendmail()
    {
        $data = SettingModel::where('id', 1)->first();
        Mail::to($data->email_primary)->send(new SendMail());
        return redirect()->back()->with('message', 'Contact message successfully sent.');
    }

    public function sendmail_contact(Request $request)
    {
        // dd($request->all());
        $g_recaptcha_response = $request->input('g_recaptcha_response');
        $result = $this->getCaptcha($g_recaptcha_response);
        if ($result->success == true && $result->score > 0.6) {
            $request->validate([
                'full_name' => 'required',
                'number' => 'required',
                'email' => 'required|email',
            ]);

            if ($request->isMethod('post')) {
                $setting = SettingModel::where('id', 1)->first();
                $create = ContactModel::create([
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    'number' => $request->number,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'country' => $request->country,
                ]);
                //   return new ContactMail();
                Mail::to($setting->email_primary)->send(new ContactMail());
                $name = $request->full_name;
                $message = "<p>Thanks for contacting us. One of our team will be in touch with you soon.</p>";
                return view('themes.default.inquiry-success', compact('message', 'name'));
            }
        } else {
            return back()->with('error', 'You are a robot');
        }
    }
    public function sendmail_resume(Request $request)
    {
        try {
            $g_recaptcha_response = $request->input('g_recaptcha_response2');
            $result = $this->getCaptcha($g_recaptcha_response);

            if ($result->success == true) {
                $validated = $request->validate([
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'contact' => 'required|string|max:20',
                    'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
                    'cover_letter' => 'required|file|mimes:pdf,doc,docx|max:2048',
                    'agree_terms' => 'accepted',
                ]);

                $setting = SettingModel::where('id', 1)->first();
                $cvFile = $request->file('cv');
                $cvName = time() . '-' . $cvFile->getClientOriginalName();
                $cvFile->move(public_path('uploads/cv'), $cvName);

                $coverFile = $request->file('cover_letter');
                $coverName = time() . '-' . $coverFile->getClientOriginalName();
                $coverFile->move(public_path('uploads/coverletter'), $coverName);
                $create = CareerModel::create([
                    'fname' => $request->first_name,
                    'lname' => $request->last_name,
                    'email' => $request->email,
                    'number' => $request->contact,
                    'message' => $request->message,
                    'cv' => $cvName,
                    'cover' => $coverName,
                    'subject' => $request->type,
                    'country' => $request->country,
                    'position' => $request->position,
                ]);
                // return new CareerMail($create);
                Mail::to($setting->email_primary)->send(new CareerMail($create));
                $name = $request->first_name;
                $position = $request->position;
                $message = "<p>Thanks for applying. One of our team will be in touch with you soon.</p>";

                return view('themes.default.application-success', compact('message', 'name', 'position'));
            } else {
                return back()->with([
                    'error' => true,
                    'message' => 'Please try again'
                ]);
            }
        } catch (Exception $e) {
            return back()->with([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
    }

    private function getCaptcha($Secretkey)
    {
        $secret = env('SECRET_KEY');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$Secretkey}");
        $return = json_decode($response);
        return $return;
    }

    public function career_navigation(Request $request)
    {
        $data['career_title'] = $request->input('post_title');
        return view('themes.default.apply', $data);
    }

    public function career_apply()
    {
        $data['career_title'] = request()->segment(3);
        return view('themes.default.apply', $data);
    }

    public function career_apply_action()
    {
        $data = SettingModel::where('id', 1)->first();
        Mail::to($data->email_primary)->send(new CareerApply());
        return redirect()->back()->with('message', 'Successfully Applied.');
    }

    public function postby_category($id)
    {
        $post_category = PostCategoryModel::where(['id' => $id])->first();
        $data = PostModel::where(['post_category' => $id])->paginate(20);
        if ($data) {
            return view('themes.default.postbycategory', compact('data', 'post_category'));
        }
        return false;
    }

    public function postby_parent($id)
    {
        $childCount = PostModel::where(['post_parent' => $id])->count();
        if ($childCount > 0) {
            $parent_post = PostModel::where('post_parent', $id)->first();
            $post = PostModel::where(['post_parent' => intval($id)])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.template-project-list', compact('post', 'parent_post'));
        }
        return false;
    }



}
