@extends('layouts.app')
@section('content')
<div class="container" >
 <a href="/post" class="btn btn-primary btn-sm ml-2" style="position:fixed;top:14%;">Go back</a><br><br>
 <div class="container">
 <img class="ml-3" src="/uploads/avatars/{{$posts->user->avatar}}" style="width:50px;height:50px;border-radius:100%"/>
 <h3 class="ml-2"> {{$posts->user->name}}</h3>
 <div class="jumbotron">

    @if ($posts->cover_image)
     <h1  style="width:80px;height:80px;boder-radius:20px;"> 
     <img src="/storage/cover_image/{{$posts->cover_image}}" style="width:100%;height:100%"/>
     </h1>
   @endif
     <h3>{{$posts->body}}</h3>
  
  <a href="/post/{!!$posts->id!!}/edit" class="btn btn-default float-right">Edit</a>
{{-- <hr> --}}
  </div>
  @if(count($comments)>0)
  @foreach($comments as $comment)
  <div class="mb-4">
  <img src="/uploads/avatars/{{$comment->user->avatar}}" style="width:50px;height:50px;border-radius:100%" alt=""><strong>{{$comment->user->name}}</strong>
    {{$comment->body}}
  </div>
  @endforeach
  @endif
  <!-- <div>
  </div> -->
  {!! Form::open(['action' => 'CommentController@store', 'method'=>'POST','enctype'=>'multipart/form-data','class'=>'row','style'=>'position:fixed; bottom:0;left:10%;right:0' ]) !!}     
       {{Form::text('body', '' , ['class'=>'form-control col-lg-6 col-md-6 col-8','placeholder'=>'body','style'=>'hight:500px'])}}
       <input type="text" name="comment_id" value="{{$posts->id}}" hidden>
    <!-- <div class="form-group"> -->
        <!-- {{Form::file('cover_image')}} -->
     {{Form::submit('submit', ['class'=> 'btn btn-primary col-lg-2 col-md-3 col-4',])}}
     {!! Form::close() !!}
    <!-- </div> -->
    </div>
 
@endsection