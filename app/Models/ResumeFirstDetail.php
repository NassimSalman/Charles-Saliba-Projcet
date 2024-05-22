<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeFirstDetail extends Model
{
   public static function getResumeFirstDetail(){

    $resume_first_detail = self::all();

    // $resume_first_detail=[

    //     (object)[
    //         'experience_logo' => '/images/resume-logo.png',
    //         'experience_title' => ' Standing Positions',
    //         'experience_detail' => 'Founder and CEO at HR Works s.a.l., Organizational & Human Capital Consulting Firm.,Co-founder at SME Platform s.a.l., specialized in supporting Institutional practice in SMEs.,Co-founder and President of the “Lebanese Consultants Association”, an NGO for organizing and exposing the Consulting Sector in Lebanon.,Public Speaker on Organizational Performance Strategies, Leadership, and Human Capital Issues.,Author and Thinker on Leadership, Talent Disruption, and Human Capital Dynamics.,'
    //     ],
    //     (object)[
    //         'experience_logo' => '/images/resume-logo.png',
    //         'experience_title' => 'Advisory Positions',
    //         'experience_detail' => 'Executive Mentor at Endeavor Global Network – Lebanon Branch.,
    //         Community contributor to SMEs’ and Youth Development.,
    //         Advisor to the International Movement of the Apostolate of Children.'
    //     ],
    // ];

    return $resume_first_detail;
   }
}
