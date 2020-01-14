@extends('layout.app')
@section('content')
<div class="fixed-bottom">
{!! Form::open(['action' => 'MessageController@store', 'method'=>'POST','enctype'=>'multipart/form-data'] ) !!}
    <div class="form-group">
       {{Form::label('message', 'Message')}}
       {{Form::text('message', '' , ['id'=> 'article-ckeditor', 'class'=>'form-control','placeholder'=>'body'])}}
       {{Form::submit('submit', ['class'=> 'btn btn-primary float-right'])}}
    </div>
     {!! Form::close() !!}
</div>

@endsection