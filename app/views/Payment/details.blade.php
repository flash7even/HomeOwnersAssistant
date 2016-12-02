@extends('templates.default')

@section('head')
<title>Monthly Payments</title>
@stop

@section('content')
	<div class="container">
		<div class="well">
			<h1>Payments of {{$month}} &bull; {{$year}}</h1>
			<hr>
			<table class="table table-striped">
				<thead>
					<th>#</th>
					<th>Date</th>
					<th>Renter Name</th>
					<th>Amount</th>
				</thead>
				<tbody>
					@foreach($payments as $key=>$payment)
						<tr>
							<th scope="row">{{$key+1}}</th>
							<td>{{explode(' ', $payment->created_at)[0]}}</td>
							<td>{{$payment->renter->name}}</td>
							<td>{{$payment->amount}}</td>
						</tr>
					@endforeach
						<tr>
							<th scope="row">#</th>
							<td></td>
							<td><b>Total</b></td>
							<td><b>{{$payments->sum('amount')}}</b></td>
						</tr>
				</tbody>
			</table>

			<ul class="pager">
				<li class="previous">
					<a href="{{URL::route('paymentdetails', array($prev['month'], $prev['year']))}}" aria-label="Previous"><b>Previous Month</b></a>
				</li>
				<li class="next">
					<a href="{{URL::route('paymentdetails', array($next['month'], $next['year']))}}" aria-label="Next"><b>Next Month</b></a>
				</li>
			</ul>

		</div>

	</div>

@stop