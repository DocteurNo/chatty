<?php

use Chatty\Http\Controllers\HomeController;

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);

Route::get('/alert', function () {
    return redirect()
        ->route('home')
        ->with('info', 'You are signed up!');
});