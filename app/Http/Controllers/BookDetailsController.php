<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookDetailsController extends Controller
{
    public function render($id){

        $book_details = Book::getBookDetails($id);

        return view('pages.book-detail',['book_details' => $book_details]);
    }
}
