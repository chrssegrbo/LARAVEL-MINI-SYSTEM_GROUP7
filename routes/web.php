<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/home', function () {
    return view('HomePage');
});

