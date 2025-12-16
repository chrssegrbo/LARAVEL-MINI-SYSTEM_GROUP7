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

Route::get('/register', function () {
    return view('Register');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/products', function () {
    return view('ProductPage');
});
