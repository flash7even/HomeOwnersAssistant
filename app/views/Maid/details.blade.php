@extends('templates.default')

@section('head')
<title>Maid Details...</title>
@stop

@section('content')

	<div class="container">
		@foreach($maids as $maid)
			<div class="well">
				<h4>Name: {{$maid->name}} <small><a href="{{URL::route('maidedit', $maid->id)}}">Edit</a></small></h4>
				<h4>NID: {{$maid->nid}}</h4>
				<h4>Renter Name: {{$maid->renters->first()->name}}</h4>
			</div>
		@endforeach
	</div>

@stop