<?php

namespace App\Http\Controllers;

use App\Models\Authorship;
use App\Models\Book;
use App\Models\WelcomeToSite;
use App\Models\HomeAuthorship;
use App\Models\HomeMediaFirstSlide;
use App\Models\HomeMediaSecondSlide;
use App\Models\HomeBook;
use App\Models\Quote;
use App\Models\Journey;
use App\Models\Expertise;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function render(){

        $welcome_to_site = WelcomeToSite::getWelcomeToSite();

        $home_authorship = HomeAuthorship::getHomeAuthorship();
        
        $home_media_first_slide = HomeMediaFirstSlide::getHomeMediaFirstSlide();
        
        $home_media_second_slide = HomeMediaSecondSlide::getHomeMediaSecondSlide();
        
        $home_book = Book::getHomeBook();
       
        $quote = Quote::getQuote();

        $journey = Journey::getJourney();
        
        $expertise = Expertise::getExpertise();
        
        
        return view('pages.home', compact('welcome_to_site', 'home_authorship', 'home_media_first_slide','home_media_second_slide', 'home_book', 'quote', 'journey', 'expertise'));

    }

}
