<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.dashboard');
});

Route::get('/demo', function () {
    return view('welcome');
});
