@extends('templates.default')


@section('head')
<title>Car Parking Details</title>
@stop


@section('content')
	<div class="container">
	@foreach($parkings as $parking)
		<div class="well">
			<h4>Car Parking ID: {{$parking->id}} <small><a href="parking/edit?id={{$parking->id}}">Edit</a></small></h4>
			<h4>Flat ID: {{$parking->flat->id}}</h4>
			<h4>Renter Name: {{$parking->renter->name}}</h4>
			<h4>License: {{$parking->license}}</h4>
		</div>
	@endforeach
	</div>
@stop