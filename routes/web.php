<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});

Route::get('/home', function () {
    return view('leanding_page.home');
});
