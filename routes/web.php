<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index',[
   'as'=>'trang-chu',
   'uses'=>'PageController@getIndex'
]);
Route::get('dang-nhap',[
   'as'=>'login',
   'uses'=>'PageController@getLogin'
]);
Route::get('dang-ki',[
   'as'=>'signin',
   'uses'=>'PageController@getSignin'
]);
Route::post('dang-ki',[
   'as'=>'signin',
   'uses'=>'PageController@postSignin'
]);
Route::post('dang-nhap',[
   'as'=>'login',
   'uses'=>'PageController@postLogin'
]);
Route::get('dang_xuat',[
   'as'=>'logout',
   'uses'=>'PageController@getLogout'
]);
Route::get('Dang-nhap-nguoi-dung',[
   'as'=>'nguoidung',
   'uses'=>'PageController@getNguoidungdangnhap'
]);
Route::get('nha-tuyen-dung-dang-nhap',[
   'as'=>'nhatuyendung',
   'uses'=>'PageController@getNhatuyendungdangnhap'
]);
Route::get('thong-tin-nha-tuyen-dung',[
   'as'=>'thongtinnhatuyendung',
   'uses'=>'PageController@getThongtinnhatuyendung'
]);
Route::post('thong-tin-nha-tuyen-dung',[
   'as'=>'thongtinnhatuyendung',
   'uses'=>'PageController@postThongtinnhatuyendung'
]);
Route::get('thong-tin-nguoi-dung',[
   'as'=>'thongtinnguoidung',
   'uses'=>'PageController@getThongtinnguoidung'
]);
Route::post('thong-tin-nguoi-dung',[
   'as'=>'thongtinnguoidung',
   'uses'=>'PageController@postThongtinnguoidung'
]);
Route::get('dang-ki-nha-tuyen-dung',[
   'as'=>'tuyendung',
   'uses'=>'PageController@getTuyendung'
]);
Route::post('dang-ki-nha-tuyen-dung',[
   'as'=>'tuyendung',
   'uses'=>'PageController@postTuyendung'
]);
Route::get('dang-nhap-nha-tuyen-dung',[
   'as'=>'dangnhap',
   'uses'=>'PageController@getDangnhap'
]);
Route::post('dang-nhap-nha-tuyen-dung',[
   'as'=>'dangnhap',
   'uses'=>'PageController@postDangnhap'
]);
Route::get('login/{provider}',[
   'as'=>'provider_login',
   'uses'=>'PageController@redirectToProvider'
]);
Route::get('login/{provider}/callback',[
   'as'=>'provider_login_callback',
   'uses'=>'PageController@handleProviderCallback'
]);

Route::get('add-tin-tuyen-dung',[
   'as'=>'themtintuyendung',
   'uses'=>'PageController@getAddtin'
]);
Route::post('add-tin-tuyen-dung',[
   'as'=>'themtintuyendung',
   'uses'=>'PageController@postAddtin'
]);
Route::get('chi-tiet-cong-viec/{idTin}',[
   'as'=>'chitietcongviec',
   'uses'=>'PageController@getChitiet'
]);

Route::get('viec_lam',[
   'as'=>'vieclam',
   'uses'=>'PageController@getvieclam'
]);
Route::get('xem-thong-tin/{idND}',[
   'as'=>'xemthongtin',
   'uses'=>'PageController@getXemthongtin'
]);
Route::get('admin-dang-nhap',[
   'as'=>'admin',
   'uses'=>'PageController@getAdmin'
]);
Route::get('men-doan',[
   'as'=>'men',
   'uses'=>'PageController@getMen'
]);

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');