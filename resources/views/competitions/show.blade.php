@extends('layouts.app')
@section('content')
	
	<h3>{{$competition['Name']}}</h3>

	@foreach($seasons as $season)
		<div>
			<a href="/seasons/{{$season['id']}}">{{$season['Name']}}</a>
		</div>
	@endforeach
	
@endsection