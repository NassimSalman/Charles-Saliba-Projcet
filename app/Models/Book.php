<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function getBooks(){

        $books = self::all();
        // $books =[

        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        //     (object)[
        //         'book_image' => '/images/book 1.png',
        //         'hovered_image' => '/images/hovered-image-books.png',
        //         'book_title' => 'Positive Influence',
        //     ],
        // ];
        return $books;
        
    }

    public static function getBookDetails($id)

    {
        $book_details = self::findOrFail($id);

        return $book_details;
    }

    public static function getHomeBook()
    {        
        $home_book = self::all();
        return $home_book;
    }
}
