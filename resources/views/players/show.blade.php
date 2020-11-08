@extends('layouts.app')
@section('content')
	
	<div>
		{{$player['FirstName']}}
	</div>
	<div>
		<img src="{{$player['PhotoUrl']}}" alt="">
	</div>
	
@endsection