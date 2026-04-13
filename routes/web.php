<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', 'FrontendControllers\FrontpageController@index');

/* Authentication Routes... */
Route::get('adminisclient', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('adminisclient', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::redirect('/dashboard', '/admin/dashboard', 301);
//================== Frontend Routes =================//
Route::get('banners', 'FrontendControllers\FrontpageController@banners');

// Normal Pages
Route::get('{uri}.html', 'FrontendControllers\FrontpageController@pagedetail')->name('page.pagedetail');
Route::get('page/{uri}.html', 'FrontendControllers\FrontpageController@posttype')->name('page.posttype');

Route::get('{parenturi}/{uri}.html', 'FrontendControllers\FrontpageController@pagedetail_child')->name('page.pagedetail_child');
Route::get('{parenturi}/apply/{uri}.html', 'FrontendControllers\FrontpageController@apply');
Route::post('page/apply/applyjob', 'FrontendControllers\FrontpageController@career_apply_action')->name('career-apply-action');
Route::post('/career/careerapply/{uri}', 'FrontendControllers\FrontpageController@careerapply')->where('uri', '[0-9A-Za-z]+');

Route::get('page/photogallery/{category_id}', 'FrontendControllers\FrontpageController@photo_gallery');

// Send Mail
Route::post('page/contact/sendmail', 'FrontendControllers\FrontpageController@sendmail')->name('sendmail');
Route::post('page/contact/contact-sendmail', 'FrontendControllers\FrontpageController@sendmail_contact')->name('sendmail_contact');
Route::post('page/career/resume-sendmail', 'FrontendControllers\FrontpageController@sendmail_resume')->name('sendmail_resume');
Route::post('page/order/sendorder', 'FrontendControllers\FrontpageController@sendorder')->name('sendorder');
Route::post('page/career/sendresume', 'FrontendControllers\FrontpageController@sendresume')->name('sendresume');
Route::get('category/{uri}', 'FrontendControllers\FrontpageController@category_navigation')->name('category.navigation');

//=========================================== Backend Routes =======================================================//
Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('admin/admin-user', 'AdminControllers\Members\UserController@admin_user');
    Route::get('admin/agent-user', 'AdminControllers\Members\UserController@agent_user');
    Route::get('inquiry/contact_us', 'AdminControllers\AdminMenu\AdminMenuController@contact_inquiry');
    Route::delete('inquiry/contact_us/{id}','AdminControllers\AdminMenu\AdminMenuController@contact_delete')->name('inquiry.delete');
    Route::get('inquiry/application', 'AdminControllers\AdminMenu\AdminMenuController@application_inquiry');
    Route::delete('inquiry/application/{id}','AdminControllers\AdminMenu\AdminMenuController@career_delete')->name('career.delete');

    Route::resources([
        'admin/adminmenu' => 'AdminControllers\AdminMenu\AdminMenuController',
        'admin/user' => 'AdminControllers\Members\UserController',
        'admin/member' => 'AdminControllers\Members\MemberController',
        'admin/role' => 'AdminControllers\Members\RoleController',
        'admin/banner' => 'AdminControllers\Banners\BannerController',
        'admin/postcategory' => 'AdminControllers\Posts\PostCategoryController',
        'admin/imagecategory' => 'AdminControllers\Galleries\ImageGalleryCategoryController',
        'admin/imagegallery' => 'AdminControllers\Galleries\ImageGalleryController',
        'admin/videocategory' => 'AdminControllers\Galleries\VideoGalleryCategoryController',
        'admin/videogallery' => 'AdminControllers\Galleries\VideoGalleryController',
        'admin/settings' => 'AdminControllers\Settings\SettingController',
        
    ]);    

    Route::resource('admin.multiplephoto', 'AdminControllers\Posts\PostImageController');
    Route::resource('admin.multiplevideo', 'AdminControllers\Posts\MultipleVideoController');
    Route::resource('admin.multiplebanner', 'AdminControllers\MultipleBanners\MultipleBannerController');
    Route::get('admin/permissionedit/{user}', 'AdminControllers\Members\UserController@permission_edit')->name('user.permissionEdit');;
    Route::put('admin/permissionedit/{user}', 'AdminControllers\Members\UserController@permission_update')->name('user.permissionUpdate');;

    Route::get('admin/assignroles/{id}', 'AdminControllers\Members\UserController@assign_roles')->name('user.assignroles');
    Route::put('admin/assignroles/{user}', 'AdminControllers\Members\UserController@update_roles')->name('user.update_roles');

    Route::get('admin/userprofile', 'AdminControllers\Members\UserController@userprofile')->name('admin.userprofile');
    Route::put('admin/update_password', 'AdminControllers\Members\UserController@update_password')->name('admin.update_password');
    Route::get('admin/changepassword', 'AdminControllers\Members\UserController@changepassword')->name('admin.changepassword');

    // For posttype
    Route::get('type/{posttype}', 'AdminControllers\Posts\PostTypeController@index')->name('type.posttype.index');
    Route::get('type/{posttype}/create', 'AdminControllers\Posts\PostTypeController@create')->name('type.posttype.create');
    Route::post('type/{posttype}/store', 'AdminControllers\Posts\PostTypeController@store')->name('type.posttype.store');
    Route::put('type/{posttype}/{id}', 'AdminControllers\Posts\PostTypeController@update')->name('type.posttype.update');
    Route::get('type/{posttype}/{id}/edit', 'AdminControllers\Posts\PostTypeController@edit')->name('type.posttype.edit');
    Route::delete('type/{posttype}/{id}', 'AdminControllers\Posts\PostTypeController@destroy')->name('type.posttype.destroy');

    // For post
    Route::get('admin/{post}', 'AdminControllers\Posts\PostController@index')->name('admin.post.index');
    Route::get('admin/{post}/create', 'AdminControllers\Posts\PostController@create')->name('admin.post.create');
    Route::post('admin/{post}/store', 'AdminControllers\Posts\PostController@store')->name('admin.post.store');
    Route::put('admin/{post}/{id}', 'AdminControllers\Posts\PostController@update')->name('admin.post.update');
    Route::get('admin/{post}/{id}/edit', 'AdminControllers\Posts\PostController@edit')->name('admin.post.edit');
    Route::get('admin/{post}/{id}', 'AdminControllers\Posts\PostController@childlist')->name('post.childlist');
    Route::delete('admin/{post}/{id}', 'AdminControllers\Posts\PostController@destroy')->name('admin.post.destroy');
    Route::delete('delete_pagethumbnail/{id}', 'AdminControllers\Posts\PostController@delete_pagethumbnail');
    Route::delete('delete_icon/{id}', 'AdminControllers\Posts\PostController@delete_icon');
    Route::delete('delete_thumbnail/{id}', 'AdminControllers\Posts\PostController@delete_thumbnail');
    Route::delete('delete_banner/{id}', 'AdminControllers\Posts\PostController@delete_banner');
    Route::put('poststatus/{id}', 'AdminControllers\Posts\PostController@poststatus')->name('admin.poststatus');
    Route::put('globalpost/{id}', 'AdminControllers\Posts\PostController@globalpost')->name('admin.globalpost');

    // Multiplephoto post
    Route::get('adminimg/multiplephoto/{post_id}', 'AdminControllers\Posts\PostImageController@upload_form')->name('admin.multiplephoto');
    Route::post('multiplephoto/store', 'AdminControllers\Posts\PostImageController@store')->name('multiplephoto.store');
    Route::get('adminimg/multiplephoto/{post_id}/{id}/edit', 'AdminControllers\Posts\PostImageController@edit')->name('edit.multiplephoto');
    Route::put('adminimg/multiplephoto/{id}', 'AdminControllers\Posts\PostImageController@update')->name('multiplephoto.update');
    Route::delete('adminimg/multiplephoto/{id}', 'AdminControllers\Posts\PostImageController@destroy');

// Associated Post
    Route::get('admin/associated/{type}/{id}', 'AdminControllers\Posts\AssociatedPostController@associated_post')->name('associated.post.index');
    Route::get('admin/associated/{type}/{id}/create', 'AdminControllers\Posts\AssociatedPostController@create')->name('admin.associated.create');
    Route::post('admin/associated/{type}/{id}/store', 'AdminControllers\Posts\AssociatedPostController@store')->name('admin.associated.store');
    Route::delete('admin/associated/{type}/{id}', 'AdminControllers\Posts\AssociatedPostController@destroy')->name('admin.associated.destroy');
    Route::get('admin/associated/{type}/{id}/edit', 'AdminControllers\Posts\AssociatedPostController@edit')->name('admin.associated.edit');
    Route::put('admin/associated/{type}/{id}', 'AdminControllers\Posts\AssociatedPostController@update')->name('admin.associated.update');

  // Upload multiple document
    Route::get('doc/multipledocument/{post_id}', 'AdminControllers\Posts\PostDocController@index')->name('doc.multipledocument');
    Route::get('doc/multipledocument/{post_id}/create', 'AdminControllers\Posts\PostDocController@create');
    Route::post('doc/multipledocument/store', 'AdminControllers\Posts\PostDocController@store')->name('multipledocument.store');
    Route::get('doc/multipledocument/{post_id}/{id}/edit', 'AdminControllers\Posts\PostDocController@edit');
    Route::put('doc/multipledocument/{post_id}', 'AdminControllers\Posts\PostDocController@update');
    Route::delete('doc/deleterow/{id}', 'AdminControllers\Posts\PostDocController@destroy');
    Route::delete('doc/multipledocument/{id}', 'AdminControllers\Posts\PostDocController@delete_doc_file');

    // List User for API
    Route::get('admin/pages/listusers/{dept}', 'AdminControllers\Circulars\CircularController@listusers');
    Route::get('admin/pages/departments', 'AdminControllers\Circulars\CircularController@departments');

    View::composer(['*'], function ($view) {
        $posttype = App\Models\Posts\PostTypeModel::orderBy('ordering', 'asc')->get();
        $view->with('posttype', $posttype);
    });

  
});
