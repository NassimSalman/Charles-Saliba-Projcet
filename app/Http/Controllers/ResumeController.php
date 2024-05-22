<?php

namespace App\Http\Controllers;

use App\Models\ResumeImage;
use App\Models\ResumeFirstDetail;
use App\Models\ResumeThirdDetail;
use App\Models\ResumeFourthDetail;
use App\Models\ResumeFifthDetail;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function render(){

        $resume_image = ResumeImage::getResumeImage();
        $resume_first_detail = ResumeFirstDetail::getResumeFirstDetail();
        $resume_third_detail = ResumeThirdDetail::getResumeThirdDetail();
        $resume_fourth_detail = ResumeFourthDetail::getResumeFourthDetail();
        $resume_fifth_detail = ResumeFifthDetail::getResumeFifthDetail();

        return view('pages.resume', compact('resume_image', 'resume_first_detail', 'resume_third_detail', 'resume_fourth_detail', 'resume_fifth_detail'));
    }
}
