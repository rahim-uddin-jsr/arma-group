<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function missionVision()
    {
        return view('frontend.pages.about.mission-vision');
    }
    public function ourValues()
    {
        return view('frontend.pages.about.our-values');
    }
    public function ourStrength()
    {
        return view('frontend.pages.about.our-strength');
    }
    public function chairmanMessage()
    {
        return view('frontend.pages.about.chairman-message');
    }
}