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
        $new=$pos->first()->posts()->latest()->get();
        //dd($new);
       // dd($post->created_at);
        $p=collect([
                'id'=>$post->id,
                'title'=>$post->title,
                'name'=>$post->user()->get()->first()->name,
                'created_at'=>$post->created_at,
                'description'=>str_limit($post->content,300),
                'featured'=>$post->featured

        ]);


       //dd($p['description']);
        return view('General.front')->with('projects',Project::all())
                                    ->with('post',$p)
                                    ->with('lpost',$new);

    }

}
