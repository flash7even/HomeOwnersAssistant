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
			<li><h4>You have <a href="flatdetails">{{$flatCount}} Flats</a></h4></li>
			<li><h4>You have <a href="renterdetails">{{$renterCount}} Renters</a></h4></li>
			<li><h4>Car Parking <a href="parking">info</a></h4></li>
		</div>
		<div class="well">
			<a href="addflat"><button class="btn btn-raised">Add Flat</button></a>
			<a href="addrenter"><button class="btn btn-raised">Add Renter</button></a>
			<a href="parking/new"><button class="btn btn-raised">Add Car Parking Info</button></a>
		</div>
	</div>
@stop
