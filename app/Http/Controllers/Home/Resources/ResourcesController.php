<?php

namespace App\Http\Controllers\Home\Resources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function AlumCard()
    {
        return view('HomePages.Resources.alumcard');
    }

    public function CampusFacilities()
    {
        return view('HomePages.Resources.campusfacilities');
    }
    public function LifeLongLearning()
    {
        return view('HomePages.Resources.lifelonglearning');
    }
    public function AlumcardDiscounts()
    {
        return view('HomePages.Resources.alumcarddiscounts');
    }
    public function TranscripDdegreeVerification()
    {
        return view('HomePages.Resources.transcriptdegreeverification');
    }

}
