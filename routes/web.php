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

Route::get('/', 'WelController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/create', 'WelController@create' );

Route::get('/admin/comments', 'AdminController@comment');

Route::get('/admin/skills', 'AdminController@skill');
Route::get('/admin/about', 'AdminController@about');


Route::post('/admin/skill/{id}/change', 'AdminController@changeSk');
Route::post('/admin/about/{id}/change','AdminController@changeAb');


