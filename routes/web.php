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

Route::get('/', 'WelcomePageController@index')->name('welcome');
Route::get('/past-paper', 'PastPaperController@index')->name('paper.index');
Route::middleware('auth')->group( function () {

    Route::get('/profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/profile', 'UsersController@update')->name('users.update');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
