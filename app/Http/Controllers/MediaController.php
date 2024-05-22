<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class MediaController extends Controller
{
    public function render(){

        $media = Media::getMedias();

        return view('pages.media',compact('media'));
    }
}
