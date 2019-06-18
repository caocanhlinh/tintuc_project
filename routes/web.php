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
use App\TheLoai;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',function(){
	return view('admin.dashboard');
});

route::get('admin/login','UserController@getLoginAdmin');
route::post('admin/login','UserController@postLoginAdmin');
route::get('admin/logout','UserController@getLogoutAdmin');

route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	route::group(['prefix'=>'theloai'],function(){
		route::get('list','TheLoaiController@getList');
		route::get('add','TheLoaiController@getAdd');
		route::post('add','TheLoaiController@postAdd');
		route::get('edit/{id}','TheLoaiController@getEdit');
		route::post('edit/{id}','TheLoaiController@postEdit');
		route::get('delete/{id}','TheLoaiController@getDelete');
	});

	route::group(['prefix'=>'loaitin'],function(){
		route::get('list','LoaiTinController@getList');
		route::get('add','LoaiTinController@getAdd');
		route::post('add','LoaiTinController@postAdd');
		route::get('edit/{id}','LoaiTinController@getEdit');
		route::post('edit/{id}','LoaiTinController@postEdit');
		route::get('delete/{id}','LoaiTinController@getDelete');
	});

	route::group(['prefix'=>'tintuc'],function(){
		route::get('list','TinTucController@getList');
		route::get('detail/{id}','TinTucController@getID');
		route::get('add','TinTucController@getAdd');
		route::post('add','TinTucController@postAdd');
		route::get('edit/{id}','TinTucController@getEdit');
		route::post('edit/{id}','TinTucController@postEdit');
		route::get('delete/{id}','TinTucController@getDelete');
	});
	route::get('test','TinTucController@getTest');
});
route::get('home','PagesController@home');
route::get('allpost','PagesController@allpost');
route::get('category-{id}','PagesController@catpost');
route::get('detail/post/{id}','PagesController@detail');

route::get('test',function(){
	//Redis::del('visits');
	Redis::HMSET('user:1000','username', 'caolinh', 'password', 'P1pp0', 'age', '21');
	echo Redis::HGET('user:1000','username');
});