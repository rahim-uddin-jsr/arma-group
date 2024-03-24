<?php

namespace App\Http\Controllers;

use App\Model\Basicinfo;
use App\Model\Gallery;
use App\Model\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
    // projects section start
    public function addProjectIndex()
    {
        // $data =Basicinfo::all();
        return view('backend.pages.add-project');
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

      // check duplicate position

      $check = Gallery::where ([
        ['position' ,'=', $gallary->position],
      ])->first();

      if($check){
        return redirect('dashboard/gallery')->with('status' , 'Duplicate position, data entry unsuccessful');
    }

     // end duplicate position


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

    public function gallery_table_edit($id)
    {
        $gallary = Gallery::findOrFail($id);
        return view('backend.pages.editgallery', compact('gallary'))
            ->with('gallary', $gallary);

    }

    public function gallery_table_update(Request $request, $id)
    {
        $gallary = Gallery::findOrFail($id);



        $gallary->title = $request->input('title');
        $gallary->position = $request->input('position');

         // check duplicate position

      $check = Gallery::where ([
        ['position' ,'=', $gallary->position],
      ])->first();

      if($check){
        return back()->with('status' , 'Duplicate position, data entry unsuccessful');
    }

     // end duplicate position

        if ($request->hasFile('image')) {
            $destination = 'public/uploads/gallery/' . $gallary->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/uploads/gallery', $filename);
            $gallary->image = $filename;
        }


        $gallary->update();
        return redirect('dashboard/gallery_table')->with('status', 'data updated successfully');

    }




    // gallery table

    public function index_gallery_table()
    {

        //gallery-phpmyadminfetch


        $gallaryshow = Gallery::all();
        return view('backend.pages.gallerytable', compact('gallaryshow'));
    }

    public function gallery_table_delete($id)
    {

        $gallary = Gallery::findOrFail($id);
        $gallary->delete();
        return redirect('/dashboard/gallery_table')->with('status', 'data deleted successfully');
    }




    //gallery section end
}
