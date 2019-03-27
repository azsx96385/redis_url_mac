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

Route::get('/test', 'RedisController@index');

//顯示首頁
Route::get('/', 'RedisController@index');

//會員使用介面
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
       
        //註冊路由
        Route::get('sign_in','RedisController@signInPage');
        Route::post('sign_in','RedisController@signInprocess');

        //登入路由
        Route::get('log_in','RedisController@logInPage');
        Route::post('log_in','RedisController@logInprocess');
        Route::post('log_out','RedisController@logOutprocess');


    });
});