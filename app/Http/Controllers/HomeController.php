<?php

namespace App\Http\Controllers;

use App\Post;
use App\Project;
use App\Category;
use Illuminate\Http\Request;
use HTML;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        //$po=Post::get();
        $po=Category::where('name','posts')->get();
        $post=$po->first()->posts()->get()->last();
        $pos=Category::where('name','documentations')->get();
        $new=$pos->first()->posts()->latest()->take(15)->get();
        //dd($new);
        //dd($post);
         $k=[];
        foreach($post->tags as $tag)
        {
            $k[]=$tag;
        }
       //dd($k);
        $p=collect([
                'id'=>$post->id,
                'title'=>$post->title,
                'name'=>$post->user()->get()->first()->name,
                'created_at'=>$post->created_at,
                'description'=>str_limit($post->content,300),
                'featured'=>$post->featured

        ]);
        $projects=Project::orderBy('id','desc')->take(4)->get();
       // dd($projects);

        $progressbar=[
           'danger',
           'success',
           'info',
           'warning'
        ];

     
        //dd($progressbar);
       // $arraye = array_combine($projects, $progressbar);
        //dd($arraye);

        
$icons = [
        'graduation-cap',
        'archive',
       'graduation-cap',
         'table',
    ];


       //dd($p['description']);
        return view('General.front')->with('projects',$projects)
                                    ->with('post',$p)
                                    ->with('icons',$icons)
                                    ->with('lpost',$new)
                                    ->with('progress',$progressbar)
                                    ->with('tags',$k);

    }

}
