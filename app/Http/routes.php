<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return Redirect::route('front.blog');
});




Route::group(['middleware' => 'guest'], function(){


	Route::controller('password', 'RemindersController');
	Route::get('blogger/login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::post('blogger/login', array('uses' => 'Auth\AuthController@doLogin'));


	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);


	Route::get('apply-for-blogger', ['as' => 'user.create', 'uses' => 'UsersController@create']);
	Route::post('admin/user/store', ['as'=>'user.store','uses' => 'UsersController@store']);

});




Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));

	Route::get('blog/create', array('as' => 'blog.create', 'uses' => 'BlogController@create'));
	Route::post('blog', array('as' => 'blog.store', 'uses' => 'BlogController@store'));
	Route::get('blog/{id}/edit', array('as' => 'blog.edit', 'uses' => 'BlogController@edit'));
	Route::put('blog/{id}/update', array('as' => 'blog.update', 'uses' => 'BlogController@update'));
	Route::delete('blog/{id}', array('as' => 'blog.delete', 'uses' => 'BlogController@destroy'));

	Route::get('myBlog', array('as' => 'blog.own', 'uses' => 'BlogController@myBlog'));

	Route::put('profile/update', array('as' => 'profile.update', 'uses' => 'ProfileController@update'));
	Route::put('photo', array('as' => 'photo.store', 'uses' => 'ProfileController@photoUpload'));


});


Route::group(array('middleware' => 'auth'), function() {
	Route::group(array('middleware' => 'user'), function() {

		//blogger list
		Route::get('allUser', array('as' => 'user.index', 'uses' => 'UsersController@index'));
		Route::delete('allUser/{id}', array('as' => 'user.delete', 'uses' => 'UsersController@destroy'));
		//apply user list
		Route::get('allApplyList', array('as' => 'user.applyList', 'uses' => 'UsersController@applyList'));
		Route::delete('allApplyList/{id}', array('as' => 'user.destroy', 'uses' => 'UsersController@destroy'));
		//approve users
		Route::get('allUser', array('as' => 'user.index', 'uses' => 'UsersController@index'));

		//tag section
		Route::get('tag', array('as' => 'tag.index', 'uses' => 'TagController@index'));
		Route::get('tag/create', array('as' => 'tag.create', 'uses' => 'TagController@create'));
		Route::post('tag', array('as' => 'tag.store', 'uses' => 'TagController@store'));
		Route::get('tag/{id}/edit', array('as' => 'tag.edit', 'uses' => 'TagController@edit'));
		Route::put('tag/{id}/update', array('as' => 'tag.update', 'uses' => 'TagController@update'));
		Route::delete('tag/{id}', array('as' => 'tag.delete', 'uses' => 'TagController@destroy'));

		//all blog section
		Route::get('userApprove/{id}', array('as' => 'user.approve', 'uses' => 'UsersController@approve'));

		//all blog
		Route::get('blog', array('as' => 'blog.index', 'uses' => 'BlogController@index'));

		//support/ help
		Route::get('help', array('as' => 'help', 'uses' => 'UsersController@help'));





	});

});




Route::get('blog-all', array('as' => 'front.blog', 'uses' => 'FrontViewController@frontView')); //front view
Route::get('blog-details/{meta_data}', array('as' => 'front.blog_details', 'uses' => 'FrontViewController@frontBlogDetails')); //front view
Route::get('about', array('as' => 'front.about', 'uses' => 'FrontViewController@about'));

Route::get('contact', array('as' => 'front.contact', 'uses' => 'ContactController@contact'));
Route::post('contact','ContactController@getContactUsForm');

Route::post('blog-all', array('as' => 'search.action', 'uses' => 'FrontViewController@search'));
//Route::get('search', array('as' => 'front.blog', 'uses' => 'FrontViewController@searchResult'));

Route::get('archive', array('as' => 'front.archive', 'uses' => 'FrontViewController@archive'));

Route::get('blog-all/{tag}', array('as' => 'blog.tag', 'uses' => 'FrontViewController@tagAssociateBlog'));

//eror show
Route::get('error', array('as' => 'error', 'uses' => 'FrontViewController@error'));













/**********Velonic  Admin  starts ************/
/*
Route::get('profile1',function(){
	return View::make('template.profile')->with('title','Profile');
});

Route::get('timeline',function(){
	return View::make('template.timeline')->with('title','Timeline');
});

Route::get('widgets',function(){
	return View::make('template.widgets')->with('title','Widgets');
});

Route::get('portlets',function(){
	return View::make('template.portlets')->with('title','Portlets');
});

Route::get('panel',function(){
	return View::make('template.panel')->with('title','Panel');
});

Route::get('chart_x',function(){
	return View::make('template.chart_x')->with('title','Chart_x');
});


Route::get('index2',function(){
	return View::make('template.dashboard')->with('title','Dashboard');
});

Route::get('gmap',function(){
	return View::make('template.gmap')->with('title','GMap');
});

Route::get('friends',function(){
	return View::make('template.friends')->with('title','Friends');
});

Route::get('adForm',function(){
	return View::make('template.advanced_form')->with('title','Advanced Form');//problem
});

Route::get('form-wizard',function(){
	return View::make('template.form_wizard')->with('title','Form Wizard');
});

Route::get('dataTable',function(){
	return View::make('template.datatable')->with('title','Data Table');
});


*/
/********** Velonic  Admin  End ************/

