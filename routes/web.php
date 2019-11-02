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

Route::get('/', function () {
    return view('welcome');
});
Route::post('model/taikhoan/kiemtradangnhap','Mycontroler@kiemtradangnhap')->name('kiemtradangnhap');

Route::post('model/nhanvien/deletenhanvien','Mycontroler@deletenhanvien')->name('deletenhanvien');

Route::post('model/thucdon/deletethucdon','Mycontroler@deletethucdon')->name('deletethucdon');

Route::get('model/ban/getdataban','Mycontroler@getdataban')->name('getdataban');

Route::get('model/nhanvien/getdatanhanvien','Mycontroler@getdatanhanvien')->name('getdatanhanvien');

Route::get('model/thucdon/getdatathucdon','Mycontroler@getdatathucdon')->name('getdatathucdon');

Route::post('model/nhanvien/insertdatanhanvien','Mycontroler@insertdatanhanvien')->name('insertdatanhanvien');

Route::post('model/chitiethoadon/insert','Mycontroler@insert')->name('insert');

Route::post('model/thucdon/insertthucdon','Mycontroler@insertthucdon')->name('insertthucdon');

Route::post('model/nhanvien/updatengaylam','Mycontroler@updatengaylam')->name('updatengaylam');

Route::post('model/nhanvien/updatenhanvien','Mycontroler@updatenhanvien')->name('updatenhanvien');

Route::get('view',function(){
	return view('login');
});
