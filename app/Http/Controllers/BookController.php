<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function render()
    {
        $books = Book::getBooks();

        return view('pages.book', compact('books'));
    }
}
