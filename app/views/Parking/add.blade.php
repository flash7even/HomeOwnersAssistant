@extends('templates.default')

@section('head')
<title>Add Parking Data</title>
@stop

@section('content')
	<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Add a Parking</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Car Name</label>
						<input type="text" class="form-control" id="i0" name="carname">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Flat ID</label>
						<select class="form-control" name="flat">
							@foreach($flats as $flat)
								<option>{{$flat->id}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Renter Name</label>
						<select class="form-control" name="renter">
							@foreach($renters as $renter)
								<option value="{{$renter->id}}">{{$renter->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">License Number</label>
						<input type="text" class="form-control" id="i0" name="license">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>
	</div>

@stop