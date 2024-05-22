<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnglishArticle extends Model
{

public static function getEnglishArticles(){

    // $english_articles=[

    //     (object)[

    //         'article_name' => 'The Global Leader of Today',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'Reflections On Self-Leadership Inspired By A Journey In Nature',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'Emotional Intelligence In Family Businesses',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'Leadership: Engagement Through Emotional Intelligence',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'Succeeding Through The Heart & Mind',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'Next -Generation Central Banking: Strategy, Communication And Leadership At Banque Du Liban',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'How Can Central Banks Reinvent Themselves – Banque Du Liban Fifty Years On',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'The Road To Self Renewal',
    //         'article_date' => '18-4-2024',
    //     ],
    //     (object)[

    //         'article_name' => 'Strategy, Leadership, And Soft Skills',
    //         'article_date' => '18-4-2024',
    //     ],
      

    // ];

    $english_articles = self::all();
    return $english_articles;

}

}
