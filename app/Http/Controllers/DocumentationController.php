<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class DocumentationController extends Controller

{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Category::where('name','documentations')->get();
         $posts=$post->first()->posts()->latest()->get();
        //dd($post->first());

        return view('Admin.Documentations.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=Category::all();
        $tags=Tag::all();
        if(count($categories)==0 || count($tags)==0){
            Session::flash('nope','You need Categories and Tags to create a new post');
        return redirect()->back();
        
       }
        return view('Admin.Posts.create')->with('categories',Category::all())
                                         ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request,[
            'title'=>'required',      
            'content'=>'required',
            'category_id'=>'required',
            'tags'=>'required'
        ]);
       // dd($request->tags);
        $category=Category::find($request->category_id);
       // dd($request->name);
        if(count($request->tags)>4)
        {
        Session::flash('nope','you can only use 4 tags');
        return redirect()->back();
        }
        else{
        $category=Category::find($request->category_id);


        if(($request->category_id)==1)
        {
            $this->validate($request,[
                    'featured'=>'required'
                ]);
             $image       = $request->file('featured');
            $featured_new_name    = '/' .$image->getClientOriginalName();
            // create new image with transparent background color
            //$background = Image::canvas(731, 274);
         $image_resize = Image::make($image->getRealPath());//->crop(731, 274);
                   
               // $background->insert($image_resize, 'bottom');
           
       //  $image_resize->crop(731, 274);
        /// $image_resize->resizeCanvas(731, 274,'left');
         //$image_resize->resizeCanvas(731, 274,'right');
         $image_resize->save(public_path().'/'.'uploads/posts' .$featured_new_name);
  //           $featured=$request->featured;
  //           $img = Image::make($request->file('featured'))->resize(731, 274);
            // dd($img);
   //     $featured_new_name='/' .$img;
        //dd($featured_new_name);
        // save the same file as jpg with default quality
   //     $img->move('uploads/posts',$featured_new_name);
        //$featured->move('uploads/posts',$featured_new_name);
        $post=Post::create([ 
            'title'=>$request->title,
            'content'=>$request->content,
            'featured'=>'uploads/posts'.$featured_new_name,
            'slug' => str_slug($request->title),
            'category_id'=>$request->category_id,
            'user_id'=>Auth::user()->id
        ]);
        $post->tags()->attach($request->tags);
        Session::flash('success','your post is created');
        return redirect()->back();
        }
        else{
            if($request->featured)
            {
                Session::flash('nope','Documentation doesnot need a picture');
                    return redirect()->back();
            }
                 $post=Post::create([ 
                     'title'=>$request->title,
                     'content'=>$request->content,
                     'slug' => str_slug($request->title),
                     'category_id'=>$request->category_id,
                     'user_id'=>Auth::user()->id
        ]);
             $post->tags()->attach($request->tags);
             Session::flash('success','your Document is created');
             return redirect()->back();

        }
      
       // {!! $request->content !!}
       

   }
        
    }

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
        $post=Post::find($id);
        return view('Admin.Posts.update')->with('post',$post)
                                        ->with('categories',Category::all())
                                        ->with('tags',Tag::all());
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

        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'category_id'=>'required'
           
   ]);
         $post=Post::find($id);
         if($request->hasFile('featured'))
         {
            $file= $post->featured;
            $filename = asset($file);
            
            Storage::delete($filename);
            // \File::delete($filename);
            $image = $request->file('featured');
            $featured_new_name    = '/' .$image->getClientOriginalName();
            
            $image_resize = Image::make($image->getRealPath());//->crop(731, 274);
    
            //$image_resize->resizeCanvas(731, 274,'left');
      
            $image_resize->save(public_path().'/'.'uploads/posts' .$featured_new_name);
            $post->featured='uploads/posts'.$featured_new_name;
         }
         $post->title=$request->title;
         $post->content=$request->content;
         $post->category_id=$request->category_id;
         $post->save();
         $post->tags()->sync($request->tags);
         Session::flash('success','The post was updated');
         return redirect()->route('posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        Session::flash('nope','The post was trashed');
        return redirect()->back();
    }
      public function trashed()
    {
        $posts=Post::onlyTrashed()->get();
       // dd($posts);
        return view('Admin.Posts.trashed')->with('posts',$posts);
    }
      public function kill($id)
    {
        $kill=Post::withTrashed()->where('id',$id)->first();

        $kill->forceDelete();
        $file= $kill->featured;
        $filename = public_path().'/uploads/'.$file;
        \File::delete($filename);
         Session::flash('nope','Your post is permanantly deleted');

        return redirect()->back();
    }
    public function restore($id)
    {
        $kill=Post::withTrashed()->where('id',$id)->first();

        $kill->restore();
         Session::flash('success','Your post is restored');

        return redirect()->route('posts');
    }
      public function documentation($id)
    {
        $post=post::find($id);
        $pos=Category::where('name','documentations')->get();
        $new=$pos->first()->posts()->latest()->get();
        if ($post) {
            $p=collect([
                'id'=>$post->id,
                'title'=>$post->title,
                'name'=>$post->user()->get()->first()->name,
                'created_at'=>$post->created_at,
                'description'=>$post->content,
                'featured'=>$post->featured

        ]);
        }
        else
        {
            $p=[];
        }
        
        return view('General.documentation')->with('post',$p)
                                            ->with('doc',$new);
    }
    


}