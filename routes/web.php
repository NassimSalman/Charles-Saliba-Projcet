<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\AuthorshipController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookDetailsController;
use App\Http\Controllers\MediaController;
use App\Models\HomeAuthorship;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class , 'render'] );

Route::get('/media',[MediaController::class , 'render']);

Route::get('/books',[BookController::class, 'render']); 

Route::get('/book-details/{id}',[BookDetailsController::class, 'render']);

Route::get('/contact-us', function () {
    return view('pages.contact-us-detail');
});

Route::get('/resume',[ResumeController::class , 'render'] );

Route::get('/authorship/{id}',[AuthorshipController::class , 'render'] );

Route::get('/test', function () {
    return view('pages.test');
});
