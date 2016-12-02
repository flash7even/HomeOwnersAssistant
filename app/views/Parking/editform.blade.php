@extends('templates.default')

@section('head')
<title>Edit Parking Data</title>
@stop

@section('content')
	<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Edit Parking Info</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Car Name</label>
						<input type="text" class="form-control" id="i0" name="carname" value="{{$parking->carname}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Flat ID</label>
						<!--<input type="text" class="form-control" id="i0" name="flat">-->
						<select class="form-control" name="flat">
							@foreach($flats as $flat)
								<option @if($flat->id == $parking->flat->id) selected @endif>{{$flat->id}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Renter Name</label>
						<select class="form-control" name="renter">
							@foreach($renters as $renter)
								<option value="{{$renter->id}}" @if($renter->id == $parking->renter->id) selected @endif >{{$renter->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">License Number</label>
						<input type="text" class="form-control" id="i0" name="license" value="{{$parking->license}}">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>
	</div>

@stop