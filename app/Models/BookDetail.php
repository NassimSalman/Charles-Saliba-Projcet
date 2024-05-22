<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    public static function getBookDetails($id)
    {
        $book_details = self::findOrFail($id);

        return $book_details;
    }
}
