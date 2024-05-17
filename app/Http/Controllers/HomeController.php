<?php

namespace App\Http\Controllers;

use App\Models\WelcomeToSite;
use App\Models\Authorship;
use App\Models\HomeMediaFirstSlide;
use App\Models\HomeMediaSecondSlide;
use App\Models\HomeBook;
use App\Models\Quote;
use App\Models\Journey;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function render(){

        $welcome_to_site = WelcomeToSite::getWelcomeToSite();

        $authorship = Authorship::getAuthorship();
        
        $home_media_slide1 = HomeMediaFirstSlide::getHomeMediaFirstSlide();
        
        $home_media_slide2 = HomeMediaSecondSlide::getHomeMediaSecondSlide();
        
        $home_book = HomeBook::getHomeBook();
       
        $quote = Quote::getquote();

        $journey = Journey::getjourney();
        
        return view('pages.home', compact('welcome_to_site', 'authorship', 'home_media_slide1','home_media_slide2', 'home_book', 'quote', 'journey'));

    }
}
