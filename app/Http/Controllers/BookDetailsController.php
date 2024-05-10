<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookDetailsController extends Controller
{
    public function render(){

        return view('pages.book-details');
    }
}
