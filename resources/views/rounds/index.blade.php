@extends('layouts.app')
@section('content')
	@foreach ($rounds as $round)
    	<h3>{{$round['id']}}{{$round['Name']}}</h3>
	@endforeach
@endsection