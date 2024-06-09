<?php

use Illuminate\Support\Facades\Auth;

app()->bind('exc', function () {
    return new App\Tabungan();
});

Route::get('/', function () {
    // $user = Auth::user();
    // $user->notify(new App\Notifications\newVisitor('Welcome ' . $user->name));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('send/mail', 'SendMailController@sendMail');
