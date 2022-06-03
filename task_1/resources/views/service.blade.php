@extends('layouts.app')
@section('content')

<p>software farm Name: {{$name}}</p>
<p>ID: {{$id}}</p>
<p>date of establishment: {{$dob}}</p>


<h2>services :</h2>

@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection
