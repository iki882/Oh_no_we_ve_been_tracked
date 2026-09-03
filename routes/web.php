<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/', function (){
    return view('componets.navbar');
});

Route::get('gallery', function (){
    return view('pages.gallery');
});