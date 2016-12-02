@extends('templates.default')

@section('head')
	<title>Flat Details</title>
@stop

@section('content')
	<div class="container" style="padding:20px;">

		@foreach($flats as $flat)
			<div class="well">
				<h2>Flat ID: {{$flat->id}}<small>  <a href="{{URL::route('flatedit', $flat->id)}}">Edit Flat</a></small></h2>
				<h4>Rent: {{$flat->rent}}</h4>
				<h4>Number of Rooms: {{$flat->cntrooms}}</h4>
				<h4>Number of Washrooms: {{$flat->cntwashrooms}}</h4>
				<h4>Due Date of Payments: {{$flat->duedate}}</h4>
				@if( $flat->renters->count() > 0 )
					<h4><b>Renter: {{$flat->renters->first()->name}}</b>(<a href="{{URL::route('renterdetails', $flat->renters->first()->id)}}">Details</a>)</h4>
				@endif
			</div>
		@endforeach

	</div>
@stop
