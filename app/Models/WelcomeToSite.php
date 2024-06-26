<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeToSite extends Model
{
    public static function getWelcomeToSite()
    {

        $welcome_to_site = self::first();

    

        // $welcome_to_site = [

        // 'title' => 'Embrace The Power Of Positive Thinking' ,

        // 'sub_title' => 'Welcome To My Site' ,

        // 'paragraph' => 'My name is Charles Samir Saliba, a 50 years young learner and seeker of truth, no matter how relative it may seem! My friends and acquaintances know me by different names; Charles the Positive Influencer, the Entrepreneur, the Thinker, the Author, the Consultant, and the Advisor of Leaders. Although among those names, the one I prefer the most is Charles the Good Friend. For the past 30 years I have put my head into field and advisory work around Organizational Strategies, Human Capital, and Leadership Development.
            
        // Yet, along the way I did my best to promote positive thinking, good governance, youth and local talent, institutionalization of SMEs, and innovation in nurturing dreams. To realize this, I worked with tens of brilliant intellectuals, academicians, consultants, government officials, international organizations, interns and students, most of whom have become very dear friends. My authorship journey has produced more than 200 articles, 12 unpublished books, and tens of presentations and speeches delivered to all sorts of audiences young and old, local and international, engaged and disengaged. I write about Governance, Human Resources, Leadership, Politics, Economy, and Society issues at large. Yet, the closes topic to my heart is that of ‘Change’. Actually, two of my books “Making Sense in Changing World” and “Make Your Own Cheese” profoundly address the topic of Change within the context of the global dynamic that is disrupting the world of Generation Y and backward.

        // I would like to thank you for visiting my website in which you will find an abundance of my writings and big ideas that you can download with my compliments. And if you are interested to talk, work, or engage with me on any of your endeavors, do not hesitate to reach out; my coordinates are in the ‘Talk to Charles’ section. I do hope that you benefit from my thoughts on the various topics I address, and would be very glad to talk to you on any topic, ideas, or initiative that you need advice or contribution from a grey haired learner!' ,

        // 'image_1' => '/images/home-image-rel.png' ,

        // 'image_2' => '/images/image-welcome.png' ,

        //  ];

        // $welcome_to_site = json_decode(json_encode($welcome_to_site));

        // dd($welcome_to_site);

        return $welcome_to_site;
    }
}
