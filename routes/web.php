<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/media', function () {
    return view('pages.media');
});

Route::get('/books', function () {
    return view('pages.books');
});

Route::get('/book-details', function () {
    return view('pages.book-details');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/test', function () {
    return view('pages.test');
});
