<?php

use App\Subject;
use App\PastPaper;
use Illuminate\Support\Facades\Route;
// use Session;

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
//papers routes
Route::get('/', 'WelcomePageController@index')->name('welcome');
Route::get('/past-paper', 'PastPaperController@index')->name('paper.index');
Route::get('/past-paper/search', 'PastPaperController@search')->name('paper.search');

// events route
Route::get('/events', 'EventController@index')->name('event.index');
Route::get('/events/{event}', 'EventController@show')->name('event.show');

Route::get('/contact-us', 'ContactController@index')->name('contact.index');
Route::post('/contact-us/send', 'ContactController@store')->name('contact.store');

Route::get('/about-us', 'AboutController@index')->name('about.index');
Route::get('/faq', 'FaqController@index')->name('faq.index');





Route::middleware('auth')->group( function () {

    Route::get('/profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/profile', 'UsersController@update')->name('users.update');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('/subscribe', function() {

    $email = request('email');

    Newsletter::subscribe($email);

    Session::flash('subscribed','you are successfully subscribed.');

    return redirect()->back();
});
