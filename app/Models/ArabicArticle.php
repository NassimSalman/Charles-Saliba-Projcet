<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArabicArticle extends Model
{
    public static function getArabicArticles()
    {

        // $arabic_articles = [

        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],

        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],
        //     (object)[
        //         'article_name' => 'مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان',
        //         'article_date' => '18-4-2024',
        //     ],

        // ];
        $arabic_articles = self::all();

        return $arabic_articles;
    }
}
