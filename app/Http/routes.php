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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/api'],function(){
	Route::get("/",function () {
		return view('welcome');
	});
	
	Route::get("/csrf",function(){
		dd(csrf_token());
	});
	
	Route::get("/apikey",function(){
		dd(env("APP_KEY"));
	});
	
	Route::post("/getToken",['uses' => "AuthController@getToken"]);
	
	Route::group(['prefix' => '/header'],function(){
		Route::get('/menu',['uses' => "MenuController@menu"]);
	});
	
	Route::group(['prefix' => '/tags'],function(){
		Route::get('/{category}',['uses' => "PostController@category"]);
		Route::get('/{category}/{$tahun}/{$bulan}/{$tanggal}/{$judul}',['uses' => "PostController@post"]);
	});
});