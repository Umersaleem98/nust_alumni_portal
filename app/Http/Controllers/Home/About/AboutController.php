<?php

namespace App\Http\Controllers\Home\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function RectorAddress()
    {
        return view('HomePages.Abouts.rectoraddress');
    }
   
    public function MissionVision()
    {
        return view('HomePages.Abouts.missionandvision');
    }
    public function Leadership()
    {
        return view('HomePages.Abouts.leadership');
    }
    public function StaffDirecory()
    {
        return view('HomePages.Abouts.staffdirectory');
    }
}
