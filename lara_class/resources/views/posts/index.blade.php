@extends('layouts.app')
@section('content')
 <center><h4>post</h4></center>
@if(count($posts)>0)
@foreach($posts as $post)
<div class="container " style="height:auto">
<div class="container row col-12 col-lg-8 bg-success shadow mb-5" style="border-radius:20px;padding-top:10px">
  <div class="col-2 col-lg-1 "> 
   <div  style="width:80px;height:80px;border-radius:100%;border:solid grey 1px">
     <img src="/uploads/avatars/{{$post->user->avatar}}" style="width:100%;height:100%;border-radius:100%;"/>
   </div>
   <p style="width:80px;height:80px; text-align:center"> {{$post->user->name}}</p>
  </div>
  <div class="col-8 col-lg-4 ml-5">
   <a href="/post/{{$post->id}}"> <h3>{{$post->tittle}}</a></h3>
   @if ($post->cover_image)
     <h1 style="width:30px;height:30px;boder-radius:20px;"> 
     <img src="/storage/cover_image/{{$post->cover_image}}" style="width:100%;height:100%"/>
     </h1>
   @endif
 <small> {{$post->body}}</small><br>
 <small>{{$post->created_at}}</small>

 </div>
 </div>
</div>
 @endforeach
 @else
 <p class="text-center">No post found</p>
 @endif
@endsection