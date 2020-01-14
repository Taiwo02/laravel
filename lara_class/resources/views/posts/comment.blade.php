@extends('layouts.app')
@section('content')
@if(count($comments)>0)
@foreach($comments as $post)
<div>
{{$post->body}}
</div>
@endforeach
@endif

    @endsection