@extends('layouts.app')
@section('content')
<div class=" col-12 col-lg-8 ml-5  jumbotron text-center">
<h1>Welcome to the home page</h1>
</div>
<div class="row">
<div class="col-12 col-lg-6">
<div class="card shadow">
 <div class="card-header bg-success">
   <span>List Table</span>
 </div>
 <div class="card-body">
 <table class="table table-bordered">
<thead>
  <th>Name</th>
  <th>Age</th>
  <th>Color</th>

</thead>
 @foreach($student as $stud)
 <tr>
  <td>{{$stud['name']}}</td>
  <td>{{$stud['age']}}</td>
  <td>{{$stud['color']}}</td>
 </tr>
 @endforeach
</table>
</div>
 </div>
</div>

</div>
 @endsection