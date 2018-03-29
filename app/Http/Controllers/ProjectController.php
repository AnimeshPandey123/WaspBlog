<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Session;
use Auth;

class ProjectController extends Controller
{
    public function index()
    {
    	return view('Admin.Projects.index')->with('projects',Project::all());
    }
    public function create()
    {
    	return view('Admin.Projects.create');
    }
    public function edit($id)
    {
    	$project=Project::find($id);
    	return view('Admin.Projects.update')->with('project',$project);
    }
    public function store(Request $request)
    {
    	//dd($request->title);
    	  $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'content'=>'required',
                   ]);
      $user=Auth::user();
      //dd($user->id);
        $project=Project::create([ 
            'title'=>$request->title,
            'description'=>$request->content,
            'status'=>$request->status,
            'user_id'=>$user->id
            
                   ]);
             Session::flash('success','your project is created');
        return redirect()->back();
    }
      public function update(Request $request,$id)
    {
        //dd($request->title);
          $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'content'=>'required',
                   ]);
          //dd($request->status);
      $user=Auth::user();
      //dd($user->id);
       $project=Project::find($id);
       $project->title=$request->title;
       $project->status=$request->status;
       $project->user_id=$user->id;
       $project->description=$request->content;
       $project->save();
             Session::flash('success','your project is updated');
        return redirect()->back();
    }
    public function projects()
    {
    	return view('General.projects')->with('projects',Project::all());
    }
}
