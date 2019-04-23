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

Auth::routes();

Route::post('/invite', 'InviteController@invite')->name('invite');
Route::get('/accept/{token}', 'InviteController@accept')->name('accept');

Route::get('/session', 'SessionController@index')->name('newsession');
Route::post('/session', 'SessionController@create')->name('createsession');
Route::get('/session/{token}', 'SessionController@show')->name('singlesession');

/**
 * route to the page that appears after user logs in
 * board page where are all users sessions
 */
Route::get('/board', 'HomeController@index')->name('home');
