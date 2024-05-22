<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMediaFirstSlide extends Model
{
    public static function getHomeMediaFirstSlide()
    {
        $home_media_first_slide = self::all();

        // $home_media_first_slide = [
        //    (object) [
        //         'video' => '/images/video1.png',
        //         'video_title' => 'Title Goes Here'
        //     ],
        //     (object) [
        //         'video' => '/images/video2.png',
        //         'video_title' => 'Title Goes Here'
        //     ],
        //     (object) [
        //         'video' => '/images/video1.png',
        //         'video_title' => 'Title Goes Here'
        //     ],
        //     (object) [
        //         'video' => '/images/video2.png',
        //         'video_title' => 'Title Goes Here'
        //     ],

        // ];
        return $home_media_first_slide;
    }
}
