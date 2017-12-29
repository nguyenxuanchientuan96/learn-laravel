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

Route::get('/', 'PagesController@index');

Route::get('/posts', [
	'as' => 'post.index',	

	'uses' => 'PostsController@index'
	]);


// create
Route::get('/posts/create',[
	'as' => "post.create",
	'uses' =>"PostsController@create"
	]);

// store là 1 tiêu chuẩn trong lrv, để biết nhập dữ liệu gửi từ form vào
Route::post('posts', [
		'as' => 'post.store',
		'uses' => 'PostsController@store'

	]);
// end-create

Route::get('/bai-viet/{id}',[
	'as' =>"post.show",
	'uses' =>"PostsController@show"

]);



// start category
Route::get('/categories/list',[
	'as'=> 'categories.list',
	'uses' => 'CategoriesController@list'
	]);
// end category


// admin
	Route::get('/admin', [
			'as' => 'admin-page',
			'uses' => '' 
		]);
// end-admin

