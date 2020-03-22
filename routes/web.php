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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/site/index', 'SiteController@index')->name('index');
Route::get('/site/structure', 'SiteController@structure')->name('structure');
Route::get('/site/vision', 'SiteController@vision')->name('vision');
Route::get('/site/mission', 'SiteController@mission')->name('mission');
Route::get('/site/goal', 'SiteController@goal')->name('goal');
Route::get('/site/service', 'SiteController@service')->name('service');
Route::get('/site/contactus', 'SiteController@contactus')->name('contactus');
Route::get('/site/location', 'SiteController@location')->name('location');

Route::get('/checkin', 'CheckinController@index')->name('index');
