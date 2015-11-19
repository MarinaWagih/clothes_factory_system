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

//Auth Routes

Route::get('/', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//detail Routes
Route::get('detail/ajax_search','DetailController@ajax_search');
Route::post('detail/search','DetailController@search');
Route::get('detail/{id}/delete','DetailController@destroy');
Route::resource('detail','DetailController');
//detailOrder Routes
Route::post('detail_order/search','DetailOrderController@search');
Route::get('detail_order/{id}/delete','DetailOrderController@destroy');
Route::resource('detail_order','DetailOrderController');
//materialOrder Routes
Route::post('material_order/search','MaterialOrderController@search');
Route::get('material_order/{id}/delete','MaterialOrderController@destroy');
Route::resource('material_order','MaterialOrderController');
//material Routes
Route::get('material/search','MaterialController@search');
Route::get('material/{id}/delete','MaterialController@destroy');
Route::resource('material','MaterialController');
//product Routes
Route::get('product/search','ProductController@search');
Route::get('product/ajax_search','ProductController@ajax_search');
Route::get('product/{id}/delete','ProductController@destroy');
Route::resource('product','ProductController');
//trader Routes
Route::get('trader/search','TraderController@search');
Route::get('trader/ajax_search','TraderController@ajax_search');
Route::get('trader/{id}/delete','TraderController@destroy');
Route::resource('trader','TraderController');