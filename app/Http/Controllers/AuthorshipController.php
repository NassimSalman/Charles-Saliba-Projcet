<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\ArabicArticle;
use App\Models\EnglishArticle;
use App\Models\HomeAuthorship;
use Illuminate\Http\Request;

class AuthorshipController extends Controller
{
    public function render($id){

        $authorship = Authorship::getAuthorship($id);
        $home_authorship = HomeAuthorship::getHomeAuthorship();
        $arabic_articles = ArabicArticle::getArabicArticles();
        $english_articles = EnglishArticle::getEnglishArticles();
     

        return view('pages.authorship', ['authorship' => $authorship,'home_authorship' => $home_authorship, 'arabic_articles' => $arabic_articles, 'english_articles' => $english_articles]);
    }
  
}