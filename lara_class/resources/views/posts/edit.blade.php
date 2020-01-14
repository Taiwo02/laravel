@extends('layouts.app')
@section('content')
<div class="container col-12 col-lg-6">
<div class="card shadow bg-primary" style="border-radius:10px">
<div class="card-header text-center">
<span class="text-light ">Edit your post</span>
</div>
  {!! Form::open(['action' => ['PostController@update',$posts->id], 'method'=>'POST'] ) !!}
    {{-- <div class="form-group"> --}}
       {{Form::label('tittle', 'Title',['class'=>' text-light'])}}
       {{Form::text('tittle', $posts->tittle , ['class'=>'form-control bg-secondary text-light','placeholder'=>'title'])}}
    {{-- </div>
    <div class="form-group"> --}}
       {{Form::label('body', 'Body',['class'=>' text-light'])}}
       {{Form::textarea('body', $posts->body , ['id'=> 'article-ckeditor', 'class'=>'form-control bg-secondary text-light','placeholder'=>'body'])}}
    {{-- </div> --}}
     <div class="form-group">
       @csrf
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('submit', ['class'=> 'btn btn-primary float-right'])}}
  {!! Form::close() !!}
  </div>
  </div>
@endsection