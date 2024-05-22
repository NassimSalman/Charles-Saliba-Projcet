<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeImage extends Model
{
public static function getResumeImage(){
    $resume_image = self::first();

    // $resume_image=[

    //     'image' => '/images/resume-image.png',
    //     'image_title' => 'Charles Saliba',
    //     'image_text' => 'The Positive Influencer, The Entrepreneur, The Thinker, The Author, The Consultant, And The Advisor Of Leaders'

    // ];
    
    // $resume_image = json_decode(json_encode($resume_image));

    return $resume_image;
}
}
