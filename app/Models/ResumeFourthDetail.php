<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeFourthDetail extends Model
{
    public static function getResumeFourthDetail(){

        $resume_fourth_detail = self::first();

        // $resume_fourth_detail=(object)[
            
        //         'experience_logo' => '/images/resume-logo.png',
        //         'experience_title' => 'Functional Expertise',
        //         'experience_detail' => 'Operating Models., Organizational Development., Human Capital., Performance Creation., Leadership Development., Change Management,'
        //     ];

        return $resume_fourth_detail;
    }
}
