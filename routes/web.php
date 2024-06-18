<?php

// use Illuminate\Support\Facades\Auth;

// app()->bind('exc', function () {
//     return new App\Tabungan();
// });

use App\Events\TaskStatusUpdated;

Route::get('/', function () {
    // TaskStatusUpdated::dispatch();
    // $user = Auth::user();
    // $user->notify(new App\Notifications\newVisitor('Welcome ' . $user->name));
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('send/mail', 'SendMailController@sendMail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tweet', 'TweetController@index');
Route::post('/tweet', 'TweetController@store');

Route::get('/developer', 'DeveloperController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
