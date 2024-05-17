<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public static function getquote()
    {
        $quote = [
            'quote' => 'Life Is Like A Bicycle, To Keep Your Balance, You Must Keep Moving.'
        ];

        $quote = json_decode(json_encode($quote));

        return $quote;
    }
}
