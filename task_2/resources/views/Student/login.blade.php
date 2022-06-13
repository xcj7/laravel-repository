@extends('Layouts.app')
@section('content')
<br>    <br>
<h2>Login</h2>
<div class="col-md-8">
    <form action="{{route('login')}}" method="POST" class="form-group">
    {{@csrf_field()}}
        
    
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
        
        @if($errormsg)
        <span class="text-danger">{{$errormsg}}</span>
    @endif
    <br>
        <input type="submit" value="Login" class="btn btn-primary">
    </form>
    
@endsection