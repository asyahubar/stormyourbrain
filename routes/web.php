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

/**
 * route to the page that appears after user logs in
 * board page where are all users sessions
 */
Route::get('/board', 'HomeController@index')->name('home');

// TODO: add routes for single session

Route::post('invite', 'InviteController@invite')->name('invite');
Route::get('accept/{token}', 'InviteController@accept')->name('accept');

Route::post('session', 'SessionController@create')->name('newsession');
