<?php

namespace App\Http\Controllers\Api\Changelog;

use App\Changelog;
use App\Http\Controllers\Controller;
use App\Http\Resources\Changelog\ChangelogCollection;
use App\Http\Resources\Project\ProjectResource;
use App\Project;
use Illuminate\Http\Request;
use Response;

class ChangelogController extends Controller
{
    public function index($id)
    {
        //$id = 2;
        if (request()->has('app'))
        {
            $input = request()->input('app');
            // $projects =$collection->sortBy->{$attribute};
        }
        else
        {
            $input = "BCWEB";
            // return respone()->json(['error'=>'Please add app name','code'=>'404'],404);
        }
        $proj = Project::leftJoin('changelogs', 'projects.id', '=', 'changelogs.project_id')
            ->where('project_id', $id)
        //->selectRaw('projects.*, count(changelogs.project_id) AS `count`')'de'
            ->select('changelogs.title', 'changelogs.description', 'projects.title as Project_Name', 'changelogs.date', 'changelogs.version')
        //->groupBy('changelogs.project_id')
            ->orderBy('date', 'ASC')
            ->paginate(10);
        //dd($proj);
        return $proj;
        //$project=Project::where("title",$input)->first();
        //return $projects->changelogs;
        //$change=ChangelogResource::collection(Changelog::paginate());
        //return response()->json($project->changelogs()->paginate(1));
        // return $change;
        $change = new ChangelogCollection($proj);
        return $change;
        return response()->json($change, 200);
    }
    public function test()
    {
        $project   = Project::paginate(2);
        $changelog = ProjectResource::collection($project);
        return $changelog;
    }
}
