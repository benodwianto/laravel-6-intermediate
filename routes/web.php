<?php

app()->bind('exc', function () {
    return new App\Tabungan();
});

Route::get('/', function () {
    dd(app('exc'));
});
