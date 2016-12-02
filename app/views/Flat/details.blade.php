@extends('templates.default')

@section('head')
	<title>Flat Details</title>
@stop

@section('content')
	<div class="container" style="padding:20px;">
		<!--
		@foreach($flats as $flat)
			<div class="well">
				<h3>Flat Name: {{$flat->name}}&bull;<small>  <a href="{{URL::route('flatedit', $flat->id)}}">Edit</a></small></h3>
				<hr>
				<h4>Rent: {{$flat->rent}}</h4>
				<h4>Number of Rooms: {{$flat->cntrooms}}</h4>
				<h4>Number of Washrooms: {{$flat->cntwashrooms}}</h4>
				<h4>Due Date of Payments: {{$flat->duedate}}</h4>
				@if( $flat->renters->count() > 0 )
					<h4><b>Renter: {{$flat->renters->first()->name}}</b>(<a href="{{URL::route('renterdetails', $flat->renters->first()->id)}}">Details</a>)</h4>
				@endif
			</div>
		@endforeach
		-->

		@foreach($flats as $flat)
			<div class="well">
				<h1> {{$flat->name}} <small> &bull; <a href="{{URL::route('flatedit', $flat->id)}}">Edit</a></small></h1>

				<table class="table table-striped">
					<tbody>
							<tr>
								<td>Rent</td>
								<td>{{$flat->rent}}</td>
							</tr>
							<tr>
								<td>Number of Rooms</td>
								<td>{{$flat->cntrooms}}</td>
							</tr>
							<tr>
								<td>Number of Washrooms</td>
								<td>{{$flat->cntwashrooms}}</td>
							</tr>
							<tr>
								<td>Due Date of Payments</td>
								<td>{{$flat->duedate}}</td>
							</tr>
							@if( $flat->renters->count() > 0 )
								<tr>
									<td>Renter:</td>
									<td>
										@foreach($flat->renters as $key=>$renter)
											@if($key)
												&bull;
											@endif
											<a href="{{URL::route('renterdetails', $renter->id)}}">{{$renter->name}}</a>
										@endforeach
									</td>
								</tr>
							@endif
					</tbody>
				</table>
			</div>

		@endforeach

	</div>
@stop
