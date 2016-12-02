@extends('templates.default')

@section('head')
	<title>Renters Details</title>
@stop


@section('content')
	<div class="container">
		<!--
		@foreach($currentrenters as $renter)
			<div class="well">
				<h4>Name: {{$renter->name}} <small><a href="{{URL::route('renteredit', $renter->id)}}">Edit</a></small></h4>
				<h4>Gender: {{$renter->gender}}</h4>
				<h4>Age: {{$renter->age}}</h4>
				<h4>Profession: {{$renter->profession}}</h4>
				<h4>Email: {{$renter->email}}</h4>
				<h4>Contact: {{$renter->contact}}</h4>
				<h4>NID: {{$renter->nid}}</h4>
				<h4>Arrival Date: {{$renter->arrival}}</h4>
				@if($renter->flats->count() > 0)
					<h4>Flat Name:<b> {{ $renter->flats->first()->name }}</b> <small><a href="{{URL::route('flatdetails', $renter->flats->first()->id)}}">Details</a></small></h4>
				@endif

				@if($renter->parking->count() > 0)
					<h4>Car Name: {{$renter->parking->first()->carname}} <small><a href="{{URL::route('parkingdetails', $renter->parking->first()->id)}}">Details</a></small></h4>
				@endif

				@if($renter->maids->count() > 0)
					<h4>Maid Name: {{$renter->maids->first()->name}} <small><a href="{{URL::route('maiddetails', $renter->maids->first()->id)}}">Details</a></small></h4>
				@endif
				<hr>

				<h4 style="display: inline">Paid For Current Month: <b>{{$renter->hasPaid()?$renter->hasPaid():"No"}}</b></h4> &bull; <a href="{{URL::route('paymentadd', $renter->id)}}"><button class="btn btn-raised">Add Payment</button></a>
				
			</div>
		@endforeach
		-->

		@foreach($currentrenters as $renter)
			<div class="well">
				<h1>{{$renter->name}} <small>&bull; <a href="{{URL::route('renteredit', $renter->id)}}">Edit</a></small></h1>
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
								<td>Flat</td>
								<td>{{$renter->flats()->first()->name}} &bull; <small><a href="{{URL::route('flatdetails', $renter->flats->first()->id)}}">Details</a></small></td>
							</tr>

							@if($renter->parking->count() > 0)
								<tr>
									<td>Car Name</td>
									<td>
										@foreach($renter->parking as $key=>$parking)
											@if($key) &bull; @endif
											<a href="{{URL::route('parkingdetails', $parking->id)}}">{{$parking->carname}}</a>
										@endforeach
									</td>
								</tr>
							@endif

							@if($renter->maids->count() > 0)
								<tr>
									<td>Maid Name</td>
									<td>
										@foreach($renter->maids as $key=>$maid)
											@if($key) &bull; @endif
											<a href="{{URL::route('maiddetails', $maid->id)}}">{{$maid->name}}</a>
										@endforeach
									</td>
								</tr>
							@endif
					</tbody>
				</table>

				<hr>
				<h4 style="display: inline">Paid For Current Month: <b>{{$renter->hasPaid()?$renter->hasPaid():"No"}}</b></h4> &bull; <a href="{{URL::route('paymentadd', $renter->id)}}"><button class="btn btn-raised">Add Payment</button></a>
			</div>
		@endforeach
	</div>

@stop
