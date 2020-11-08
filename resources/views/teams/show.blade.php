@extends('layouts.app')
@section('content')
	
	<div>
		{{$team['Name']}}
	</div>
	<div>
		@foreach($players as $player)
		
		<div>
			<a href="/players/{{$player['id']}}">
				{{$player->FirstName}}
			</a>
		</div>
			
		@endforeach
	</div>
	
@endsection