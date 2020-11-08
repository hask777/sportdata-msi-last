@extends('layouts.app')
@section('content')
	@foreach ($competitions as $comp)
	    <h3>{{$comp['Name']}}</h3>
	@endforeach
@endsection