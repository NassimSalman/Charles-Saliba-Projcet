<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMediaSecondSlide extends Model
{
    public static function getHomeMediaSecondSlide()
    {

        $home_media_second_slide = self::all();
        // $home_media_second_slide = [

        //     (object) [
        //         'video' => '/images/video2.png',
        //         'video_title' => 'Title Goes Here',
        //     ],

        //     (object) [
        //         'video' => '/images/video1.png',
        //         'video_title' => 'Title Goes Here',
        //     ],

        //     (object) [
        //         'video' => '/images/video2.png',
        //         'video_title' => 'Title Goes Here',
        //     ],

        //     (object) [
        //         'video' => '/images/video1.png',
        //         'video_title' => 'Title Goes Here',
        //     ],
           
        // ];
        return $home_media_second_slide;
    }
}
