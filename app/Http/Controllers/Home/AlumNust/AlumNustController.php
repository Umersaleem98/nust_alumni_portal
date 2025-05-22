<?php

namespace App\Http\Controllers\Home\AlumNust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumNustController extends Controller
{
    public function AlumNUST()
    {
        return view('HomePages.AlumNust.alumNUST');
    }
    public function Association()
    {
        return view('HomePages.AlumNust.association');
    }
    public function InternationalChapters()
    {
        return view('HomePages.AlumNust.internationalChapters');
    }
    public function NationalChapters()
    {
        return view('HomePages.AlumNust.nationalChapters');
    }
    public function InMemoryOf()
    {
        return view('HomePages.AlumNust.inMemoryOf');
    }
}
