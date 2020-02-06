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

/** JWT Auth */
Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function() {
    Route::get('auth/user', 'AuthController@user');
    Route::post('auth/logout', 'AuthController@logout');
});
Route::group(['middleware' => 'jwt.refresh'], function() {
    Route::get('auth/refresh', 'AuthController@refresh');
});

Route::get('/imc/patients', 'ImcController@patients')->name('patients');
Route::get('/imc/patients/{id}', 'ImcController@getPatient')->name('getPatient');
Route::post('/imc/patients', 'ImcController@addPatient')->name('addPatient');
Route::put('/imc/patients/{id}', 'ImcController@updatePatient')->name('updatePatient');
Route::delete('/imc/patients/{id}', 'ImcController@deletePatient')->name('deletePatient');

Route::get('/imc/registrations', 'ImcController@registrations')->name('registrations');
Route::post('/imc/registration', 'ImcController@addRegistration')->name('addRegistration');

Route::get('/imc/visitions', 'ImcController@visitions')->name('visitions');
Route::post('/imc/visition', 'ImcController@addVisition')->name('addVisition');

Route::get('/imc/changwats', 'ImcController@changwats')->name('changwats');
Route::get('/imc/amphurs', 'ImcController@amphurs')->name('amphurs');
Route::get('/imc/tambons', 'ImcController@tambons')->name('tambons');

Route::get('/imc/hosps', 'ImcController@hosps')->name('hosps');
Route::get('/imc/pcus', 'ImcController@pcus')->name('pcus');

Route::get('/imc/icd10s', 'ImcController@icd10s')->name('icd10s');
Route::get('/imc/icd10s/{icd10}', 'ImcController@searchIcd10s')->name('searchIcd10s');
