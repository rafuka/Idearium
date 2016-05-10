<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "Home";
});

Route::post('/', function () {
    return "Home Post";
});

Route::get('/register', function () {
    return "Register Form";
});

Route::post('/register', function () {
    return "Register Form";
});

Route::get('/archive', function () {
    return "Archive";
});



Route::get('/search', function () {
    return "Search";
});

Route::post('/search', function () {
    return "Search Post";
});
