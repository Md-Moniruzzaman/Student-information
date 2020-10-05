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

Route::get('/', 'HomeController@index')->name('/home');
Route::get('/add/student/','StudentController@index')->name('/add/student/');
Route::post('/student/save','StudentController@store')->name('/student/save');
Route::get('/student/edit/{id}','StudentController@edit')->name('/student/edit/');
Route::post('/student/edit','StudentController@update')->name('/student/edit');
Route::get('/student/delete/{id}','StudentController@delete')->name('/student/delete/');
Route::get('/add/result/{id}','StudentController@mark')->name('/add/result/');
Route::get('/student/view/{id}','StudentController@viewStudent')->name('/student/view/');
Route::get('/view/results/{id}','StudentController@viewResult')->name('/view/result/');

// subject info
Route::get('/add/subject/','SubjectController@index')->name('/add/subject');
Route::post('/subject/save','SubjectController@store')->name('/subject/save');
Route::post('/result/save','SubjectController@addResult')->name('/result/save');
Route::get('/all/subject','SubjectController@allSubject')->name('/all/subject');
Route::get('/subject/edit/{id}','SubjectController@editSuject')->name('/subject/edit/');
Route::post('/subject/update','SubjectController@updateSubject')->name('/subject/update');
Route::get('/subject/delete/{id}','SubjectController@deleteSubject')->name('/subject/delete/');
Route::get('/add/result/','SubjectController@addResult');

Auth::routes();



