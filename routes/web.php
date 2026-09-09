<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/how-to-play', function () {
    return view('pages.how-to-play');
})->name('how-to-play');


Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/team', function () {
    return view('pages.team');
})->name('team');