<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@show');

Route::get('posts/{post}', 'PostController@show');

Route::get('video/Tracker', 'TrackerController@show');
Route::post('video/Tracker', 'TrackerController@store');
Route::get('video/create', 'TrackerController@create');
Route::get('video/{id}/edit', 'TrackerController@edit')->name('edit');
Route::put('video/{id}', 'TrackerController@update');

