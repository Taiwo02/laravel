<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Storage;
use App\Post;
use Auth;
use App\Comment;
use DB;
class PostController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts= Post::all();
        //   return  Post::where('tittle','post two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts= Post::orderBy('tittle','asc')->paginate(1);
        $posts= Post::orderBy('created_at','asc')->get();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
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
              'tittle'=> 'required',
               'body'=> 'required',
               'cover_image'=>'image|nullable|max:1999'
          ]);
          if($request->hasFile('cover_image')){
            //how to get fileName with extension
            $fileNameWithext=$request->file('cover_image')->getClientOriginalName();
            //Get just fileName
            $fileName=pathinfo($fileNameWithext,PATHINFO_FILENAME);
            //Get just extension
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //file to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload
            $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
          }
          else{
            $fileNameToStore='';
          }
          $post= new Post;
          $post->tittle  = $request->input('tittle');
          $post->body    = $request->input('body');
          $post->user_id = auth()->user()->id;
          $post->cover_image=$fileNameToStore;
          $post->save();
          return redirect('/post')->with('success','post created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $post = DB::table('comment')->where('comment_id', $id)->get();
    //   return Comment::all();
    $comments=Comment::orderBy('created_at','asc')->where('comment_id',$id)->get();
      $posts= Post::find($id);
    return view('posts.show')->with('posts',$posts)->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts= Post::find($id);
        return view('posts.edit')->with('posts', $posts);
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
            'tittle'=> 'required',
             'body'=> 'required'
        ]);
        $post= Post::find($id);
        $post->tittle = $request->input('tittle');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/post')->with('success','post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
