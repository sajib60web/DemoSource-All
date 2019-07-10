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

Route::get('/', 'WellcomeController@index');
Route::get('/dynamic-fild', 'WellcomeController@dynamicFild'); 

Route::get('/form', 'CartController@form'); 
Route::post('/add', 'CartController@add');
Route::get('/cart', 'CartController@cart');
Route::post('/updateCart', 'CartController@cartUpdate');

Route::get('/scearchPage', 'SearchController@scearchPage');
Route::post('/scearch', 'SearchController@scearch');
Route::get('/posts', 'SearchController@posts');

Route::get('/autosearch', 'SearchController@autocompletePage');
Route::get('/autocomplete', 'SearchController@search');

Route::get('/selectCategories', 'CategoryController@selectCategories');
Route::get('/selcelProduct/{id}', 'CategoryController@selcelProduct');

Route::get('/students', 'AjaxController@students');
Route::get('/read/data', 'AjaxController@readData');
Route::post('/add/student', 'AjaxController@addStudent');
Route::post('/delete/student', 'AjaxController@delete');

Route::get('/add/marksheet', 'MarksheetController@marksheet');
Route::post('/create_marksheet', 'MarksheetController@createMarksheet');


Route::get('/ajax/login', 'AjaxLoginController@index');
Route::post('/ajax_login_check', 'AjaxLoginController@ajaxLoginCheck');
Route::get('/dashboard', 'CheckOuteController@dashboard');
Route::get('/logout', 'CheckOuteController@logout');






Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
