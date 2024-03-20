<?php

namespace App\Http\Controllers;

use App\Model\Basicinfo;
use App\Model\Gallery;
use App\Model\Projects;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function projects()
    {
        $projects = Projects::all();
        return $projects;
        // return view('frontend.pages.contact');
    }
    public function project(Request $request, $id)
    {
        // dd($id,$request->all());
        $project = Projects::with('images','keyFeature','feature')->find($id);
        return $project;
        // return view('frontend.pages.contact');
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return $gallery;
        // return view('frontend.pages.contact');
    }
    public function basicInfo()
    {
        $data =Basicinfo::all();
        return $data;
        // return view('frontend.pages.contact');
    }
}
