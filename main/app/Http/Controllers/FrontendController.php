<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Projects;
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
    // project section start
    public function projectDetails($id)
    {
        $project = Projects::with('images','keyFeature')->find($id);
        return view('frontend.pages.project.project-details',compact('project'));
        // return view('frontend.pages.contact');
    }
    public function upcomingProject()
    {
        $projects = Projects::with('images','feature')->get()->whereIn('status', 'upcoming');
        return view('frontend.pages.project.upcoming-project',compact('projects'));
    }
    public function onGoingProject()
    {
        $projects = Projects::with('images','feature')->get()->whereIn('status', 'ongoing');
        return view('frontend.pages.project.on-going-project',compact('projects'));
    }
    public function completedProject()
    {
        $projects = Projects::with('images','feature')->get()->whereIn('status', 'completed');
        return view('frontend.pages.project.completed-project',compact('projects'));
    }
    // project section end
    public function gallary()
    {
        $gallery =Gallery::all();
        return view('frontend.pages.gallary', compact('gallery'));
    }
    public function certrfication()
    {
        return view('frontend.pages.certrfication');
    }
    public function career()
    {
        return view('frontend.pages.career');
    }
    public function contact()
    {
        // dd(12);
        return view('frontend.pages.contact');
    }
}
