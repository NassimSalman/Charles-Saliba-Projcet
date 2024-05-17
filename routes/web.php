<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class , 'render'] );

Route::get('/media', function () {
    return view('pages.media');
});

Route::get('/books', function () {
    return view('pages.book');
});

Route::get('/book-details', function () {
    return view('pages.book-detail');
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
