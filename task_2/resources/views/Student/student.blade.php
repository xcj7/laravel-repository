@extends('Layouts.app')
@section('content')
<br><br>
<h2>Registration</h2>
<div class="col-md-8">
    <form action="{{route('reg')}}" method="POST" class="form-group">
    {{@csrf_field()}}
        <div class="col-md-4 ">
            <input type="text"class="form-control" name="name" placeholder="Enter your name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <div class="col-md-4 ">
            <input type="email"class="form-control" name="email" placeholder="Enter your Email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <div class="col-md-4 ">
            <input type="password"class="form-control" name="password" placeholder="Enter your Password">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
@endsection