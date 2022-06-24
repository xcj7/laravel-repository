@extends('layouts.app')
@section('content')
<br>
<div class="title justify-content-center"><h2 class="text-center"> USERS LIST</h2></div>
<table class="table table-bordered text-center">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Type</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <th>{{$student->name}}</th>
        <th>{{$student->email}}</th>
        <th>{{$student->phone}}</th>
        <th>{{$student->type}}</th>
    </tr>
    @endforeach
</table>
@endsection