<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeFifthDetail extends Model
{
    public static function getResumeFifthDetail()
    {
        $resume_fifth_detail = self::all();

        // $resume_fifth_detail = [

        //     (object)[
        //         'experience_detail' => 'Health Care & Hospitals.,Telecom.,Tech and Digital., Education.,Banking & Finance.,Insurance.,Shipping.,Water & Energy.'
        //     ],

        //     (object)[
        //         'experience_detail' => 'Parliamentary Affairs.,Engineering.,Youth Affairs.,Automotive., Retail & FMCG.,Food & Beverage.,Strat ups & SMEs.,NGOs.'
        //     ]
        // ];
        return $resume_fifth_detail;
    }
}
