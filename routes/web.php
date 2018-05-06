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

Route::get('/', 'PagesController@index');
Route::get('/mission', 'PagesController@mission');
Route::get('/contact', 'PagesController@contact');
Route::get('/help', 'PagesController@help');
Route::get('/donations', 'PagesController@donations');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');


Route::resource('customers','CustomersController');
Route::resource('orphans','OrphansController');
Route::resource('staff','StaffController');