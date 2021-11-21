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
Route::get('/' , 'HomeController@index');
Route::post('/search' , 'HomeController@search_result');

Route::get('/auth/login' , 'Auth\LoginController@login')->name('login');
Route::get('/auth/logout' , 'Auth\LoginController@logout')->name('logout');
Route::get('/auth/register' , 'Auth\RegisterController@register')->name('register');
Route::post('/auth/doregister' , 'Auth\RegisterController@create');
Route::post('/auth/dologin' , 'Auth\LoginController@dologin');
Route::group(['middleware' => 'auth'],function(){

    Route::get('/channel' , 'ChannelController@index');
    Route::get('/channel/get_change' , 'ChannelController@get_change');
    Route::post('/channel/report' , 'ChannelController@report');
    Route::post('/comment/store' , 'CommentController@store');
    Route::get('/comment/get' , 'CommentController@get');
    Route::post('/gift/store' , 'GiftController@store');
    Route::get('/gift/get' , 'GiftController@get');
    Route::get('/pay/index', 'PayController@index');
    Route::get('/pay/alipay', 'PayController@alipay');
    Route::get('/profile/index', 'ProfileController@index');
    Route::get('/profile/upload_img', 'ProfileController@upload_img');
    Route::post('/profile/update_img', 'ProfileController@update_img');
    Route::get('/profile/verify', 'ProfileController@verify');
    Route::get('/profile/identify', 'ProfileController@identify');
    Route::post('/profile/identify_update', 'ProfileController@identify_update');

    Route::get('/lang/{locale}', 'HomeController@lang');

});
Route::get('/publisher' , 'PublisherController@login');
Route::get('/publisher/login' , 'PublisherController@login');
Route::post('/publisher/dologin' , 'PublisherController@dologin');
Route::get('/publisher/register' , 'PublisherController@register');
Route::post('/publisher/doregister' , 'PublisherController@doregister');
Route::get('/publisher/channel' , 'PublisherController@channel');
Route::get('/publisher/comment_get' , 'PublisherController@comment_get');
Route::get('/publisher/gift_get' , 'PublisherController@gift_get');
Route::get('/publisher/gift_get' , 'PublisherController@gift_get');
Route::post('/publisher/set_change' , 'PublisherController@set_change');
Route::post('/publisher/set_change_org' , 'PublisherController@set_change_org');


// Route::get('/publisher/add_member' , 'PublisherController@gift_get');



Route::get('fire', function () {
    // this fires the event
    event(new App\Events\NewMessage());
    return "event fired";
});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});



