<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeThirdDetail extends Model
{
   public static function getResumeThirdDetail(){

        $resume_third_detail = self::first();

//     $resume_third_detail = (object)[
        
//             'experience_logo' => '/images/resume-logo.png',
//             'experience_title' => 'Previously',
//             'experience_detail' => 'Owner and Publisher of “The HR Review Magazine”., Partner & CEO at SoftSource s.a.l., Partner at Lebanese Adventure an Experiential Learning and Eco Education Company., Board Member of the Human Resources Association of Lebanon (HRAL)., Booz Allen Hamilton Expert Associate in Organization & Change Practice., Bank of Beirut s.a.l. Head of Human Resources., Bank Audi s.a.l. Group Training Manager., Haigazian University. Developer of the HR Program Certification and Lecturer., Rafic Hariri University. Lecturer on Human Resources Management and Organizational Behavior.'
        
//     ];

    return $resume_third_detail;
   }
}
