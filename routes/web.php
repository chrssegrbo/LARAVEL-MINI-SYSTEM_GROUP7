<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/home', function () {
    return view('HomePage');
});

Route::get('/about', function () {
    return view('AboutPage');
});

Route::get('/contact', function () {
    return view('ContactPage');
});
