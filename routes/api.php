<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


route::group(['prefix'=>'v1'],function(){

	route::group(['prefix'=>'theloai'],function(){
		route::get('/','Api\ApiTheLoaiController@index');
		route::get('/{id}','Api\ApiTheLoaiController@show');
		route::post('/','Api\ApiTheLoaiController@store');
		route::put('/{id}','Api\ApiTheLoaiController@update');
		route::delete('/{id}','Api\ApiTheLoaiController@delete');
	});

	route::group(['prefix'=>'loaitin'],function(){
		route::get('/','Api\ApiLoaiTinController@index');
		route::get('/{id}','Api\ApiLoaiTinController@show');
		route::post('/','Api\ApiLoaiTinController@store');
		route::put('/{id}','Api\ApiLoaiTinController@update');
		route::delete('/{id}','Api\ApiLoaiTinController@delete');
	});

	route::group(['prefix'=>'tintuc'],function(){
		route::get('/','Api\ApiTinTucController@index');
		route::get('/theloai={id}','Api\ApiTinTucController@showloaitin');
		route::get('/loaitin={id}','Api\ApiTinTucController@showloaitin');
		route::get('/{id}','Api\ApiTinTucController@show');
		route::post('/','Api\ApiTinTucController@store');
		route::put('/{id}','Api\ApiTinTucController@update');
		route::delete('/{id}','Api\ApiTinTucController@delete');
	});
});
