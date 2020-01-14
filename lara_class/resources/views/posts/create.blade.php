@extends('layouts.app')
@section('content')
<div class="container row " >
<div class="container card shadow bg-success col-11 col-lg-6" style="border-radius:10px">
<div class="card-header text-center">
<span class="text-light ">Create your post</span>
</div>
  {!! Form::open(['action' => 'PostController@store', 'method'=>'POST','enctype'=>'multipart/form-data'] ) !!}
       {{Form::label('tittle', 'Title',['class'=>' text-light'])}}       
       {{Form::text('tittle', '' , [ 'class'=>'form-control','placeholder'=>'title'])}}
       {{Form::label('body', 'Body',['class'=>' text-light'])}}       
       {{Form::textarea('body', '' , ['id'=> 'article-ckeditor', 'class'=>'form-control','placeholder'=>'body'])}}
    <div class="form-group">
        {{Form::file('cover_image')}}
     {{Form::submit('submit', ['class'=> 'btn btn-primary float-right'])}}
     {!! Form::close() !!}
    </div>
  </div>
@endsection