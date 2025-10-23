<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('tentangkami', function () {
    return view('tentangkami');
});

Route::get('layanankami', function () {
    return view('layanankami');
});