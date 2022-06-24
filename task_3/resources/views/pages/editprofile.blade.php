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
    <h2 class="text-center">EDIT PROFILE</h2>
    </div>
<form action="{{route('edit')}}" method="post">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="text" class="form-control input" type="text" name="name" id="exampleFormControlInput1" value="{{$students->name}}" placeholder="name..........">
</div>
@error('name')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="email" class="form-control input" value="{{$students->email}}"  id="exampleFormControlInput1" name="email" placeholder="name@example.com">
</div>
@error('email')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone number</label>
  <input type="number" class="form-control input" value="{{$students->phone}}"  id="exampleFormControlInput1" name="phone" placeholder="01*********">
</div>
@error('phone')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror
<input type="hidden" name="id" value={{$students->id}}>
<div class="mb-3">
  <input type="submit" class="form-control btn btn-info" value="EDIT">
</div>
</form>

</div>
</div>
@endsection