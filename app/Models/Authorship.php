<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorship extends Model
{
    public static function getAuthorship($id)
    {
        $authorship = self::findOrFail($id);
       
       
        return $authorship;
    }
    
    public static function getHomeAuthorship()
    {
        $home_authorship = self::all();
        return $home_authorship;
        // $authorship = [

        //     (object) [
        //         'title' => 'Authorship',
        //         'logo' => '/images/logo-1.png',
        //         'sub_title' => 'Leadership And Governance',
        //         'text' => 'Leadership,
        //         Governance,
        //         Management',
        //         'arrow' => '/images/send-arrow.png',
        //     ],
            
        //     (object) [
        //         'title' => '',
        //         'logo' => '/images/logo-2.png',
        //         'sub_title' => 'Human Resources',
        //         'text' => 'Human Resources Strategy,
        //         Human Resources Management,
        //         Personal Development',
        //         'arrow' => '/images/send-arrow.png',
        //     ],

        //     (object) [
        //         'title' => '',
        //         'logo' => '/images/logo-3.png',
        //         'sub_title' => 'Socio-Economics',
        //         'text' => 'Economic Affairs,
        //         Social Affairs,
        //         Political Affairs,
        //         Religious Affairs',
        //         'arrow' => '/images/send-arrow.png',
        //     ],         
        // ];
    }
    
}
