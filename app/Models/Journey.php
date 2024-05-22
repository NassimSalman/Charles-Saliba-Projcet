<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    public static function getJourney()
    {
        $journey = self::all();

        // $journey = [

        //     (object) [
        //         'date' => '1997',

        //         'text' => 'Born in Saida to father Samir and mother Hayat of Majdelyoun a village to the east of Saida',
        //     ],

        //     (object) [
        //         'date' => '1978 - 1985',

        //         'text' => 'Sidoon National School till Grade 5, then displaced by war to Beirut',
        //     ],

        //     (object) [
        //         'date' => '1985 - 1988',

        //         'text' => 'Pinehill College till Grade 8, then moving back to Majdelyoun after the displacement was brought to an end',
        //     ],
            
        //     (object) [
        //         'date' => '1988 - 1992',

        //         'text' => 'National Evangelical Institute for Girls and Boys till Grade 12',
        //     ],

        //     (object) [
        //         'date' => '1992 - 1995',

        //         'text' => 'American University of Beirut; acquired a BA in Political Studies and Public 
        //         Administration',
        //     ],

        //     (object) [
        //         'date' => '1978 - 1985',

        //         'text' => 'American University of Beirut; acquired an MA in Public Administration wit emphasis on Human Resources Management (Thesis: Human Resources in Total Quality Management) ',
        //     ],

        //     (object) [
        //         'date' => '1995 - 1998',

        //         'text' => 'American University of Beirut; acquired an MA in Public Administration wit emphasis on Human Resources Management (Thesis: Human Resources in Total Quality Management)',
        //     ],

        //     (object) [
        //         'date' => '1996 - 2005',

        //         'text' => 'Bank Audi s.a.l. from Junior HR Officer to Group Training Manager',
        //     ],

        //     (object) [
        //         'date' => '1997 - 2003',

        //         'text' => 'Lebanese Management Association, Member of the Training and Development Committee',
        //     ],

        //     (object) [
        //         'date' => '1988 - 1992',

        //         'text' => 'Born in Saida to father Samir and mother Hayat of Majdelyoun a village to the east of Saida',

        //     ],

        //     (object) [
        //         'date' => '1998 - 1999',

        //         'text' => 'Lebanese Army Lieutenant',
        //     ],

        //     (object) [
        //         'date' => '2000 - 2003',

        //         'text' => 'Hariri Canadian University, HR and Organizational Behavior Lecturer',
        //     ],

        //     (object) [
        //         'date' => '2001 - 2005',

        //         'text' => 'Haigazian University, HR and Organizational Behavior Lecturer',
        //     ],

        //     (object) [
        //         'date' => '2005 - 2006',

        //         'text' => 'Bank of Beirut HR Manager',
        //     ],

        //     (object) [
        //         'date' => '2006 - 2008',

        //         'text' => 'Booz Allen Hamilton / Booz &Co., Associate',
        //     ],

        //     (object) [
        //         'date' => '2009',

        //         'text' => 'Established HR Works Consulting Firm',
        //     ],

        //     (object) [
        //         'date' => '1997',

        //         'text' => 'Born in Saida to father Samir and mother Hayat of Majdelyoun a village to the east of Saida',
        //     ],

        //     (object) [
        //         'date' => '2010',

        //         'text' => 'Established Softsource s.a.l., HR Software Development Company',
        //     ],

        //     (object) [
        //         'date' => '2012',

        //         'text' => 'Established The HR Review Magazine',

        //     ],

        //     (object) [
        //         'date' => '2018',

        //         'text' => 'Established The Lebanese Consultants Association',

        //     ],

        // ];

        return $journey;
    }
}
