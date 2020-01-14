@extends('layouts.app')
@section('content')
<div class="container row">
<div class="col-12 col-lg-4">
<img class="col-12 col-lg-4"   src="/uploads/avatars/{{$user->avatar}}" style=" border-radius:100%;"/>
<h1 class="text-center">{{$user->name}}'s  profile</h2>
<form enctype="multipart/form-data" action="/profile" method="POST">
   <h5>Update your profile picture</h5>
   <input type="file" name="avatar">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
   <input type="submit" class="pull-right btn btn-sm btn-primary">
</form>

</div>
    </div>
@endsection
