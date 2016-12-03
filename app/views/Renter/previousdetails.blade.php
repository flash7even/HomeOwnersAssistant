@extends('templates.default')

@section('head')
	<title>Renters Details</title>
@stop


@section('content')
	<div class="container">
		@foreach($currentrenters as $renter)
			<div class="well">
				<h1>{{$renter->name}}</h1>
				<table class="table table-striped">
					<tbody>
							<tr>
								<td>Gender</td>
								<td>{{$renter->gender}}</td>
							</tr>
							<tr>
								<td>Age</td>
								<td>{{$renter->age}}</td>
							</tr>
							<tr>
								<td>Profession</td>
								<td>{{$renter->profession}}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{{$renter->email}}</td>
							</tr>
							<tr>
								<td>Contact</td>
								<td>{{$renter->contact}}</td>
							</tr>
							<tr>
								<td>NID</td>
								<td>{{$renter->nid}}</td>
							</tr>
							<tr>
								<td>Arrival Date</td>
								<td>{{$renter->arrival}}</td>
							</tr>
							<tr>
								<td>Departure Date</td>
								<td>{{$renter->departure}}</td>
							</tr>
					</tbody>
				</table>
			</div>
		@endforeach
	</div>

@stop
