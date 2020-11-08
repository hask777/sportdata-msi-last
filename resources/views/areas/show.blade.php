@extends('layouts.app')
@section('content')
	@foreach($competitions as $competition)
		<div>
			<a href="/competitions/{{$competition['id']}}">
				{{$competition['Name']}}
			</a>
		</div>

	@endforeach
	<hr>
	<div>
		@foreach($teams as $team)
		<div>
			<a href="/teams/{{$team['id']}}">
				{{$team['Name']}}
			</a>
		</div>
			
		@endforeach
	</div>
@endsection