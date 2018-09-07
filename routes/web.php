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
Route::post('defedantstore','DefedantController@store')->name('defedants');
// Route::post('plaintstore','PlaintsController@store')->name('plaints');

Route::get('/defedant','DefedantController@create')->name('defedant');
// Route::get('/plaintiff','PlaintsController@create')->name('plaintiff');
Route::get('/complaint','PlaintsController@index')->name('complains');
Route::get('/accept','PlaintsController@accept')->name('accept');
Route::get('/reject','PlaintsController@reject')->name('reject');

Route::get('/admin','AdminController@admin');
Route::get('/admin/dashboard','AdminController@dashboard');
//  Route::post('userstore','StudentController@store')->name('studentStore');
//  Route::get('/student','StudentController@create')->name('student');
 Route::get('/retrieve','StudentController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('plaintstore','PlaintsController@store')->name('plaints');

Route::get('/plaintiff','PlaintsController@create')->name('plaintiff');

//  Route::get('/home', 'HomeController@index')->name('home');
