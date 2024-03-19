<?php

namespace App\Http\Controllers;

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
}
