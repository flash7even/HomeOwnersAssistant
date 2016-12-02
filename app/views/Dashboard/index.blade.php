@extends('templates.default')

@section('head')
	<title>Dashboard || {{$name}}</title>
@stop

@section('content')
	<div class="container">
		<div class="well">
			<!--
			<h1>{{$name}} - Dashboard</h1>
			<hr>
			-->
			<h2>Summary</h2>
			<li><h4>You have <a href="{{URL::route('flatdetails')}}">{{$flatCount}} Flats</a></h4></li>
			<li><h4>You have <a href="{{URL::route('renterdetails')}}">{{$renterCount}} Renters</a></h4></li>
			<li><h4>Car Parking <a href="{{URL::route('parkingdetails')}}">info</a></h4></li>
		</div>
		<div class="well">
			<a href="{{URL::route('flatadd')}}"><button class="btn btn-raised">Add Flat</button></a>
			<a href="{{URL::route('renteradd')}}"><button class="btn btn-raised">Add Renter</button></a>
			<a href="{{URL::route('parkingadd')}}"><button class="btn btn-raised">Add Car Parking Info</button></a>
			<a href="maid/new"><button class="btn btn-raised">Add Maid Info</button></a>
			<a href="payment/new"><button class="btn btn-raised">Add Payment Info</button></a>
		</div>
	</div>
@stop
