<?php

use Chatty\Http\Controllers\HomeController;
use Chatty\Http\Controllers\AuthController;

/**
 * Home
 */
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);

/**
 * Authentication
 */
Route::get('/signup', [
    'uses' => 'AuthController@getSignup',
    'as' => 'auth.signup',
]);

Route::post('/signup', [
    'uses' => 'AuthController@postSignup',
]);

Route::get('/signin', [
    'uses' => 'AuthController@getSignin',
    'as' => 'auth.signin',
]);

Route::post('/signin', [
    'uses' => 'AuthController@postSignin',
]);