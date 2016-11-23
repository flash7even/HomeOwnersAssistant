@extends('templates.default')

@section('head')
	<title>Dashboard || {{$name}}</title>
@stop

@section('content')
	<div class="container">
		<div class="well">
			<h1>{{$name}} - Dashboard</h1>
			<hr>
			<h2>Summary</h2>
			<li>You have {{$flatCount}} Flats</li>


		</div>


	</div>
@stop
