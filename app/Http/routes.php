<?php

use Chatty\Http\Controllers\HomeController;

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);
