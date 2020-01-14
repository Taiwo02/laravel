@extends('layouts.app')
@section('content')
@if (count($users)>0)
@foreach ($users as $user)
 @if ($user != $user->user_id)
<div class="bg-info" style="border-radius:2px">
<a href="/users/{{$user->id}}"><img src="/uploads/avatars/{{$user->avatar}}" style="border-radius:100%" class="col-3 col-lg-1"/>
<h5 class="col-3 col-lg-1 text-light">{{$user->name}}</h5>
</a>
</div> 
 @endif
@endforeach
@else
<p>No user available</p>
@endif
@endsection
    {{-- {{$users->links()}} --}}