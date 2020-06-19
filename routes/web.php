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

Route::get('/', 'PostController@show')->name('home_page');

Route::get('posts/{post}', 'PostController@show');

Route::get('video/Tracker', 'TrackerController@show')->name('tracker_page');
Route::post('video/Tracker', 'TrackerController@store');
Route::get('video/create', 'TrackerController@create');
Route::get('video/{id}/edit', 'TrackerController@edit')->name('edit_video');
Route::put('video/{id}', 'TrackerController@update')->name('video_update');
Route::put('video/delete/{id}', 'TrackerController@delete')->name('video_delete');
Route::get('video/MyTracker', 'MyTrackerController@show')->name('my_tracker_page');

Route::get('admin', 'AdminPanelController@show')->name('admin_panel');
Route::get('admin/generatecsv', 'AdminPanelController@generateVideoCsv')->name('generate_csv');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PostController@show')->name('home');
