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

Route::get('/imc/dashboard', 'ImcController@dashboard')->name('dashboard');

Route::get('/imc/patients', 'PatientController@patients')->name('patients');
Route::get('/imc/patients/{id}', 'PatientController@getPatient')->name('getPatient');
Route::post('/imc/patients', 'PatientController@addPatient')->name('addPatient');
Route::put('/imc/patients/{id}', 'PatientController@updatePatient')->name('updatePatient');
Route::delete('/imc/patients/{id}', 'PatientController@deletePatient')->name('deletePatient');

Route::get('/imc/registrations', 'RegistrationController@registrations')->name('registrations');
Route::post('/imc/registrations', 'RegistrationController@store')->name('store');
Route::get('/imc/registrations/{id}', 'RegistrationController@edit')->name('edit');
Route::put('/imc/registrations/{id}', 'RegistrationController@update')->name('update');
Route::delete('/imc/registrations/{id}', 'RegistrationController@delete')->name('delete');

Route::get('/imc/visitions', 'VisitionController@visitions')->name('visitions');
Route::post('/imc/visitions', 'VisitionController@addVisition')->name('store');
Route::get('/imc/visitions/{id}', 'VisitionController@store')->name('edit');
Route::put('/imc/visitions/{id}', 'VisitionController@updatePatient')->name('update');
Route::delete('/imc/visitions/{id}', 'VisitionController@deletePatient')->name('delete');

Route::get('/imc/barthels', 'BarthelController@index')->name('index');
Route::get('/imc/barthels/{pid}', 'BarthelController@detail')->name('detail');
Route::post('/imc/barthels', 'BarthelController@store')->name('store');

Route::get('/imc/changwats', 'ImcController@changwats')->name('changwats');
Route::get('/imc/amphurs', 'ImcController@amphurs')->name('amphurs');
Route::get('/imc/tambons', 'ImcController@tambons')->name('tambons');

Route::get('/imc/hosps', 'ImcController@hosps')->name('hosps');
Route::get('/imc/pcus', 'ImcController@pcus')->name('pcus');

Route::get('/imc/icd10s', 'ImcController@icd10s')->name('icd10s');
Route::get('/imc/icd10s/{icd10}', 'ImcController@searchIcd10s')->name('searchIcd10s');
