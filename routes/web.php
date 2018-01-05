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
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'user'],function(){
			Route::get('user_list','UserController@getUser_List');

			Route::get('user_edit/{id}','UserController@getEdit');
			Route::post('user_edit/{id}','UserController@postEdit');

			Route::get('user_add','UserController@getUser_Add');
			Route::post('user_add','UserController@postUser_Add');

			Route::get('delete/{id}','UserController@getDelete');
	});
});

Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');
Route::get('admin/logout','UserController@getLogout');

Route::get('/tem/{id}','TemplateController@getTem');

Route::get ( '/vueitems', 'TemplateController@readItems' );
Route::get ( '/templates', 'TemplateController@index' );

Route::get('/testVue', function(){
   return view('vue');
});