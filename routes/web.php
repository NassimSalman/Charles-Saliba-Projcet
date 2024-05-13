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

Route::get('/resume', function () {
    return view('pages.resume');
});

Route::get('/authorship', function () {
    return view('pages.authorship');
});

Route::get('/test', function () {
    return view('pages.test');
});
