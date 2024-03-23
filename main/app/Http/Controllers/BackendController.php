<?php

namespace App\Http\Controllers;

use App\Model\Basicinfo;
use App\Model\Gallery;
use App\Model\KeyFeature;
use App\Model\ProjectFeature;
use App\Model\ProjectImage;
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
    // projects section start
    public function addProjectIndex()
    {
        // $data =Basicinfo::all();
        return view('backend.pages.add-project', ['edit' => false]);
    }
    public function addProject(Request $request)
    {
        $project_Id = Projects::insertGetId([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'location' => $request->address,
            'status' => $request->status,

        ]);
        $features = request('feature');
        // dd(request('feature'));
        foreach ($features as $key => $value) {
            ProjectFeature::create([
                'special_feature' => $value,
                'project_id' => $project_Id,
            ]);
        }
        $keyInfo = request('key_info');
        // dd(request('feature'));
        foreach ($keyInfo as $key => $value) {
            KeyFeature::create([
                'key_info' => $value,
                'project_id' => $project_Id,
            ]);
        }

        if ($request->hasFile('project_images')) {
            $files = $request->file('project_images');
            foreach ($files as $key => $file) {
                // $extension = $file->getClientOriginalExtension();
                // $filename = 'image_' . time() . '.' . $extension;
                // $filename = $file->store('photos');
                $extension = $file->getClientOriginalExtension();
                // $name = $file->getClientOriginalName();
                $filename = uniqid() . Date('His') . '.' . $extension;
                $file->move('assets/uploads/projects-images', $filename);
                ProjectImage::create([
                    'image' => 'assets/uploads/projects-images/' . $filename,
                    'position' => $key,
                    'project_id' => $project_Id,
                ]);
            }
        }
        return back()->with('status', 'Successfully added!');
        // $data =Basicinfo::all();
        // return view('backend.pages.add-project');
    }
    public function editProjectIndex($id)
    {
        $project = Projects::with('images', 'keyFeature', 'feature')->find($id);
        return view('backend.pages.add-project', ['edit' => true], compact('project'));
    }
    public function deleteProjectImage($id)
    {
        $project = ProjectImage::find($id);
        $isDelete=$project->delete();
        if ($isDelete) {
            return back()->with('status', 'Deleted Successfully!');
        }
        return ('something went wrong');
    }
    public function editProject(Request $request, $id)
    {
        $project = Projects::find($id);

        ProjectFeature::where('project_id', '=', $id)->delete();
        KeyFeature::where('project_id', '=', $id)->delete();
        $features = request('feature');
        // dd(request('feature'));
        foreach ($features as $key => $value) {
            if (!$value) {
                continue;
            }
            ProjectFeature::create([
                'special_feature' => $value,
                'project_id' => $id,
            ]);
        }
        $keyInfo = request('key_info');
        foreach ($keyInfo as $key => $value) {
            if (!$value) {
                continue;
            }
            KeyFeature::create([
                'key_info' => $value,
                'project_id' => $id,
            ]);
        }
        if ($request->hasFile('project_images')) {
            $files = $request->file('project_images');
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . Date('His') . '.' . $extension;
                $file->move('assets/uploads/projects-images', $filename);
                ProjectImage::create([
                    'image' => 'assets/uploads/projects-images/' . $filename,
                    'position' => $key,
                    'project_id' => $id,
                ]);
            }
        }

        $project->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'location' => $request->address,
            'status' => $request->status,
        ]);
        // dd($request->all());
        return back()->with('status', 'Successfully Updated!');
    }
    public function upcomingProjects()
    {
        $projects = Projects::withCount('keyFeature', 'feature')->with('images')->get()->whereIn('status', 'upcoming');
        return view('backend.pages.upcoming-projects', compact('projects'));
    }
    public function ongoingProjects()
    {
        $projects = Projects::withCount('keyFeature', 'feature')->with('images')->get()->whereIn('status', 'ongoing');
        return view('backend.pages.ongoing-projects', compact('projects'));
    }
    public function completedProjects()
    {
        $projects = Projects::withCount('keyFeature', 'feature')->with('images')->get()->whereIn('status', 'completed');
        return view('backend.pages.completed-projects', compact('projects'));
    }
    public function deleteProject($id)
    {
        $project = Projects::find($id);
        $project->delete();
        return back()->with('status', 'Successfully deleted!');
    }
    public function project(Request $request, $id)
    {
        // dd($id,$request->all());
        $project = Projects::with('images', 'keyFeature', 'feature')->find($id);
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
        $data = Basicinfo::all();
        return $data;
        // return view('frontend.pages.contact');
    }
    // projects section end

    // basicinfo section start
    public function index_basicinfo()
    {
        return view('backend.pages.basicinfo');
    }

    //gallery section start
    public function index_gallery()
    {
        return view('backend.pages.gallery');
    }
    public function store_gallery(Request $request)
    {

        $gallary = new Gallery;
        $gallary->title = $request->input('title');
        $gallary->position = $request->input('position');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'image_' . time() . '.' . $extension;
            $file->move('assets/uploads/gallery/', $filename);
            $gallary->image = $filename;
        }


        $gallary->save();
        return redirect('dashboard/gallery_table')->with('status', 'image added successfully');

    }



    // gallery table

    public function index_gallery_table()
    {

        //gallery-phpmyadminfetch


        $gallaryshow = Gallery::all();
        return view('backend.pages.gallerytable', compact('gallaryshow'));
    }





    //gallery section start
}
