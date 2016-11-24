@extends('templates.default')

@section('head')
	<title>Renters Details</title>
@stop


@section('content')
	<div class="container">
		@foreach($renters as $renter)
			<div class="well">
				<h4>Name: {{$renter->name}}</h4>
				<h4>Gender: {{$renter->gender}}</h4>
				<h4>Age: {{$renter->age}}</h4>
				<h4>Profession: {{$renter->profession}}</h4>
				<h4>Email: {{$renter->email}}</h4>
				<h4>Contact: {{$renter->contact}}</h4>
				<h4>NID: {{$renter->nid}}</h4>
				<h4>Arrival Date: {{$renter->arrival}}</h4>
				@if($renter->flats->count() > 0)
					<h4>Pays for Flat Rent:<b> {{ $renter->flats->first()->rent }}</b> <a href="flatdetails?id={{$renter->flats->first()->id}}">(Details...)</a></h4>
				@endif
			</div>

		@endforeach
	</div>

@stop
