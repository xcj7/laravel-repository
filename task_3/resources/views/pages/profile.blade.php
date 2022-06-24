@extends('layouts.app')
@section('content')
<br>
<div class="row  justify-content-center">
    <h1 class="text-center">PROFILE INFO</h1>
<div class="col-md-6 card text-info">
    <div class="card-title">
    
    </div>
   <div class="card-body">
   <h2 class="text-center">Name: {{$students->name}}</h2>
   <h2 class="text-center">Email: {{$students->email}}</h2>
    <h2 class="text-center">Phone: {{$students->phone}}</h2>
   </div>
   <div class="card-footer text-center">
    <a href="/edit/{{$students->id}}" class="btn btn-info">Edit Profile</a>
   </div>
</div>
</div>
@endsection