<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::get('/', 'HomeController@index');

/*Route::post('/',function(){
	return view('home');
});*/

Route::get('/whatever', 'ProductController@show');

Route::post('shop/login', 'ProductController@getName');

Route::get('postdata/{id}', 'BlogsController@displaySingle');

Route::post('postdata/{id}', 'BlogsController@blogComments');
Route::get('shop/damnit', 'BlogsController@shit');



Route::get('/createblog', 'BackendPostsController@index');
Route::post('/createblog', 'BackendPostsController@makeNewPost');
Route::get('/manageposts', 'BackendPostsController@managePosts');
Route::get('backend/manageposts/{id}', 'BackendPostsController@deletePosts');
Route::get('backend/editpost/{id}', 'BackendPostsController@editPosts');
Route::post('backend/editpost/{id}', 'BackendPostsController@finalEdit');
Route::get('/manageusers', 'ManageUserController@index');

Route::get('/badgirls', function(){
	return view('pay');
});	




Auth::routes();

 Route::post('/', 'HomeController@getAllComments');



Route::prefix('auth')->group(function(){
 
 Route::get('admins/login', 'AdminLoginController@showLoginForm')->name('admins.login');

Route::post('admins/login', 'AdminLoginController@login')->name('admins.login.submit');

Route::get('admins/superadmin', 'AdminController@index')->name('admin.dashboard');



});











