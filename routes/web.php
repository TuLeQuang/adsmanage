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
	Route::resource('template', 'TemplateController');
	Route::resource('ads','AdsController');
	Route::get('ads/clone/{adsId}/{templateId}', 'AdsController@cloneAds')->name('adsClone');
	Route::get('import','TemplateController@getImport');
	Route::get('active-tem/{id}','TemplateController@getActive');

    Route::group(['prefix'=>'demo'],function(){
        Route::get('/', 'AdsController@indexDemo')->name('demoIndex');
        Route::get('mb', 'AdsController@indexDemoMobi');
        //Route::post('getTemplateWeb','AdsController@getTemplateDemoWeb');
    });

	Route::group(['prefix'=>'user'],function(){
			Route::get('user_list','UserController@getUser_List');
			Route::get('user_list_member/{id}','UserController@getListMember');
			Route::get('user_edit/{id}','UserController@getEdit');
			Route::post('user_edit/{id}','UserController@postEdit');

			Route::get('user_add','UserController@getUser_Add');
			Route::post('user_add','UserController@postUser_Add');
			Route::get('active/{id}','UserController@getActive');
			Route::get('delete/{id}','UserController@getDelete');
	});
});
   // Route::any('ads/run-script', 'AdsController@adsDemo');
    Route::post('demo/get-link-demo','AdsController@getLinkDemo')->name('get-link-demo');
    Route::post('demo/get-link-demo-mb','AdsController@getLinkDemoMobi')->name('get-link-demo-mb');
    Route::get('ads/getAdsScript/{adsId}', 'AdsController@getAdsScript')->name('adsScript');
    Route::resource('link','LinkController');

Route::get ( 'template/getTem/{id}', 'TemplateController@getTemplate');
Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');
Route::get('admin/logout','UserController@getLogout');


