@extends('layouts.app')
@section('content')
 {{-- <h1>message</h1> --}}
@if(count($messages)>0)
@foreach($messages as $mess)
<div class="container" style="margin-bottom:100px">
  <div class=" bg-info row col-10 ml-3"  style="border-radius:10px; height:auto;">
  {{-- @if ($mess->user->name) --}}
  <div class="col-12 col-lg-3">
 {{-- <img class="col-6 col-lg-10" src="../uploads/avatars/{{$mess->user->avatar}}" style="width:100%; height:80%; border-radius:100%;"/>  --}}
  <h4>  {{Auth::user()->name}}</h4>
   </div>
  {{-- @endif --}}
   <h5 class="mt-2  text-light" style="width:100%;hieght:100%;">
     {{$mess->messages}}<br>
     <hr>
    <small class="float-right  ">{{$mess->created_at}}</small>
   </h5>
  </div>
  </div>
 @endforeach
 @else
 <p class="text-center">No mess found</p>
 @endif
 {{-- <form action="MessageController@store" method="POST" class="fixed-bottom col-12">
 <input type="text"  name="message"/>
 <input type="submit"/>
 </form> --}}
 <div class="fixed-bottom">
 {!! Form::open(['action' => 'MessageController@store', 'method'=>'POST','enctype'=>'multipart/form-data'] ) !!}
    <div class="form-inline col-12" style="font-size:50px">
       {{Form::text('messages', '' , ['class'=>'form-control col-9 col-lg-10', 'placeholder'=>'message'])}}
        {{Form::submit('submit', ['class'=>'form-control col-3 col-lg-2 btn btn-primary '])}}
    </div>
     {!! Form::close() !!}
</div>
@endsection
{{-- <h1>message</h1> --}}