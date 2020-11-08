@extends('layouts.app')
@section('content')
	@foreach ($areas as $area)
	<div>
		<a href="areas/{{$area['id']}}">{{$area['Name']}}</a>
	</div>
	@endforeach
@endsection