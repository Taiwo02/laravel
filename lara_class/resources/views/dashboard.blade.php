@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/Messages" class="btn btn-sm bg-primary text-light">message</a>
          <table class="table table-striped">
              @foreach ($posts  as $post)
              <tr>
               <td>{{$post->tittle}}</td>
              </tr>
              @endforeach

          </table>
        </div>
    </div>
     
</div>
@endsection
