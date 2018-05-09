<?php

namespace App\Http\Controllers;

use App\Changelog;
use App\Project;
use Auth;
use Illuminate\Http\Request;
use Session;

class ChangelogController extends Controller
{
    public function index()
    {
        $changes = Changelog::all();
        // dd($changes->first());
        return view('Admin.Changelog.index')->with('changes', $changes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        if (count($projects))
        {
            return view('Admin.Changelog.create')->with('projects', Project::all());
        }
        else
        {
            Session::flash('nope', 'First Create a project');
            return redirect()->back();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'date'        => 'required',
            'description' => 'required',
            'project_id'  => 'required',
            'version'     => 'required'
        ]);
        //  dd(Auth::user()->id);
        $post = Changelog::create([
            'title'       => $request->title,
            'date'        => $request->date,
            'description' => $request->description,
            'user_id'     => Auth::user()->id,
            'project_id'  => $request->project_id,
            'version'     => $request->version
        ]);

        Session::flash('success', 'your Changelog is created');
        return redirect()->back();

    }

    // {!! $request->content !!}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change = Changelog::find($id);
        return view('Admin.Changelog.update')->with('change', $change)
            ->with('projects', Project::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
            'project_id'  => 'required',
        ]);
        $change              = Changelog::find($id);
        $change->title       = $request->title;
        $change->description = $request->description;
        $change->project_id  = $request->project_id;
        $change->save();
        Session::flash('success', 'The Changelog was updated');
        return redirect()->route('changelogs');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $change = Changelog::find($id);
        $change->delete();
        Session::flash('nope', 'The changelog was deleted');
        return redirect()->back();
    }
}
