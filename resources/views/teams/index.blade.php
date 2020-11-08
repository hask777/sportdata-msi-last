@extends('layouts.app')
@section('content')
	@foreach($teams as $team)
	<div>
		<a href="/teams/{{$team['id']}}">{{$team['Name']}}</a>	
	</div>
	
	@endforeach
@endsection