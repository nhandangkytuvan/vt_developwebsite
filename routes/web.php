<?php
// web
Route::get('/', 'Web\HomeController@show');
Route::get('/sitemap.xml', 'Web\HomeController@sitemap');
Route::get('/ve-chung-toi', 'Web\HomeController@about');
Route::get('/dia-chi-phong-kham', 'Web\HomeController@address');
Route::any('/search{query?}', 'Web\HomeController@search');
// Term
Route::get('/{term_link?}', 'Web\TermController@show')->where(['term_link'=>'[-a-z0-9]+']);
Route::get('/{term_alias?}/{term_id?}', 'Web\TermController@showold')->where(['term_alias'=>'[-a-z0-9]+','term_id'=>'[0-9]+']);
// Post
Route::get('/{post_link?}.html', 'Web\PostController@show')->where(['post_link'=>'[-a-z0-9]+']);
Route::get('/{post_alias?}/{post_id?}.html', 'Web\PostController@showold')->where(['post_alias'=>'[-a-z0-9]+','post_id'=>'[0-9]+']);
Route::any('web/user/login','Web\UserController@login');

Route::group(['middleware' => ['check-user']], function () {
	// user
	Route::any('user/user/create','User\UserController@create')->middleware('check-admin');
	Route::get('user/user/logout','User\UserController@logout');
	Route::get('user/user/index','User\UserController@index');
	Route::any('user/user/edit','User\UserController@edit');
	Route::any('user/user/group/{user_id?}','User\UserController@group')->middleware('check-admin');
	Route::any('user/user/block/{user_id?}','User\UserController@block')->middleware('check-admin');
	Route::any('user/user/delete/{user_id?}','User\UserController@delete')->middleware('check-admin');
	Route::post('user/user/password','User\UserController@password');
	// post
	Route::any('user/post/create','User\PostController@create');
	Route::any('user/post/edit/{post_id?}','User\PostController@edit');
	Route::any('user/post/show/{post_id?}','User\PostController@show');
	Route::any('user/post/delete/{post_id?}','User\PostController@delete');
	Route::any('user/post/index{query?}','User\PostController@index');
	// media
	//Route::any('user/media/create','User\MediaController@create');
	//Route::any('user/media/edit/{media_id?}','User\MediaController@edit');
	//Route::any('user/media/show/{media_id?}','User\MediaController@show');
	//Route::any('user/media/delete/{media_id?}','User\MediaController@delete');
	Route::any('user/media/index{query?}','User\MediaController@index');
	// term
	Route::any('user/term/create','User\TermController@create')->middleware('check-admin');
	Route::any('user/term/edit/{term_id?}','User\TermController@edit')->middleware('check-admin');
	Route::any('user/term/delete/{term_id?}','User\TermController@delete')->middleware('check-admin');
	Route::any('user/term/index{query?}','User\TermController@index');
	Route::any('user/term/remove-post/{term_id?}','User\TermController@removePost')->middleware('check-admin');
	// setting
	Route::any('user/setting/create', 'User\SettingController@create')->middleware('check-admin');
	Route::any('user/setting/edit/{setting_id}', 'User\SettingController@edit')->middleware('check-admin');
});

// DB
Route::any('db_pluck','Web\TestController@db_pluck');
Route::any('setRandomName','Web\TestController@setRandomName');
Route::any('resetNumberTuvan','Web\TestController@resetNumberTuvan');
Route::any('setNumberTuvan','Web\TestController@setNumberTuvan');
Route::any('test/seo','Web\TestController@seo');
// Chats
Route::any('chats/send','Web\ChatController@send');