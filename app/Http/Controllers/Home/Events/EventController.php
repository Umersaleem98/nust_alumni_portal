<?php

namespace App\Http\Controllers\Home\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function AlumEventCalendar()
    {
        return view('HomePages.Events.alumEventCalendar');
    }
    public function Reunions()
    {
        return view('HomePages.Events.reunions');
    }
    public function Homecoming()
    {
        return view('HomePages.Events.homecoming');
    }
    public function IftarMeetups()
    {
        return view('HomePages.Events.iftarMeetups');
    }
    public function AlumNUSTDay()
    {
        return view('HomePages.Events.alumNUSTDay');
    }

}
