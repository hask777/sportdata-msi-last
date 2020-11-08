@extends('layouts.app')
@section('content')
	
	<h3>{{$season['Name']}}</h3>
	@foreach($rounds as $round)
		<div>
			<a href="/round/{{$round['id']}}">{{$round['Name']}}</a>
		</div>
	@endforeach
	
	
@endsection