@extends('layouts.app')
@section('content')
<style>
.input{
    height: 50px;
}
label{
    color: black;
}
</style>
<br><br>
<div class="row mx-5 justify-content-center">
<div class="col-md-6 col-sm-9">
    <div class="title">
    <h2 class="text-center">Login</h2>
    </div>
<form action="{{route('login')}}" method="post">
    @csrf

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="email" class="form-control input" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
</div>
@error('email')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control input" id="exampleFormControlInput1" name="password" placeholder="*********">
</div>
@error('password')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <input type="submit" class="form-control btn btn-info" value="Login">
</div>
</form>

<div class="title text-center">
  
@if($msg)
        <span class="text-danger">{{$msg}}</span>
    @endif
</div>
<br>
<p class="text-center">Don't have any account? <a href="{{route('registration')}}">Registration</a></p>
</div>
</div>
@endsection