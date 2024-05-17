<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBook extends Model
{
    public static function getHomeBook()
    {
        $home_book = [
           (object) [
            'title' => '1' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => '2' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => '4' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
           (object) [
            'title' => 'Positive Influence' ,
            'image' => '/images/book 1.png' ,
           ],
        ];
        return $home_book;
    }
}
