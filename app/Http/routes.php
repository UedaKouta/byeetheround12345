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
Route::controller('test-url','TestController');
Route::controller('test-url2','TestController2');
Route::controller('test-url3','TestController3');
Route::post('test-url4','TestController4@foo');
Route::post('test-url5','TestController5@foo2');
Route::post('test-url6','TestController6@foo3');
