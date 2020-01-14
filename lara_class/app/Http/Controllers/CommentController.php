<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comment= Comment::orderBy('created_at','desc')->get();
        return Comment::all();
        // return view('posts.comment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request,[
             'body'=> 'required',
              'comment_id' => 'required'
            //  'cover_image'=>'image|nullable|max:1999'
        ]);
        $comment= new Comment;
        $comment->body = $request->input('body');
        $comment->user_id = auth()->user()->id;
        $comment->comment_id = $request->input('comment_id');
        $comment->save();
        // $comment = Comment::create([
        //     'body'=>$request['body'],
        //     'cmment_id'=>$request['commen']
        //     'user_id'=>auth()->user()->id,
        // ]);
        return redirect()->back()->with('success','comment created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $comments =Comment::orderBy('created_at','desc')->where('comment_id',$id)->get();
        return view('posts.show')->with('comment',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
