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
    <h2 class="text-center">Registration</h2>
    </div>
<form action="{{route('registration')}}" method="post">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="text" class="form-control input" type="text" name="name" id="exampleFormControlInput1" placeholder="name..........">
</div>
@error('name')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
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
  <label for="exampleFormControlInput1" class="form-label">Phone number</label>
  <input type="number" class="form-control input" id="exampleFormControlInput1" name="phone" placeholder="01*********">
</div>
@error('phone')
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
  <input type="submit" class="form-control btn btn-info" value="SUBMIT">
</div>
</form>
<p class="text-center">Already Have an Account? <a href="{{route('login')}}">Login</a></p>
</div>
</div>
@endsection