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

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');

Route::get('/students', 'StudentController@index');
Route::get('/teachers', 'TeacherController@index');
Route::get('/subjects', 'SubjectController@index');
Route::get('/signs', 'SignController@index');

Route::get('/students/new', 'StudentController@create');
Route::post('/students', 'StudentController@store');

Route::get('/teachers/new', 'TeacherController@create');
Route::post('/teachers', 'TeacherController@store');

Route::get('/subjects/new', 'SubjectController@create');
Route::post('/subjects', 'SubjectController@store');

Route::get('/signs/new', 'SignController@create');
Route::post('/signs', 'SignController@store');

Route::get('/continents', 'ContinentController@index');
Route::get('/continents/new', 'ContinentController@create');
Route::post('/continents', 'ContinentController@store');
