@extends('layouts.app')
@section('content')
	@foreach ($seasons as $season)
    <h3>{{$season['Name']}}</h3>
	@endforeach
@endsection