@extends('templates.default')

@section('head')
	<title>Edit Renter</title>
@stop


@section('content')

	<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Edit Renter Details</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Name</label>
						<input type="text" class="form-control" id="i0" name="name" value="{{$renter->name}}" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Gender</label>
						<select name="gender" class="form-control">
							<option @if($renter->gender == 'Male') selected @endif>Male</option>
							<option @if($renter->gender == 'Female') selected @endif>Female</option>
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Age</label>
						<input type="text" class="form-control" id="i0" name="age" value="{{$renter->age}}" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Profession</label>
						<input type="text" class="form-control" id="i0" name="profession" value="{{$renter->profession}}" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Email</label>
						<input type="email" class="form-control" id="i0" name="email" value="{{$renter->email}}" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Contact</label>
						<input type="text" class="form-control" id="i0" name="contact" value="{{$renter->contact}}" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">National ID</label>
						<input type="text" class="form-control" id="i0" name="nid" value="{{$renter->nid}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Flat</label>
						<select name="flat" class="form-control">
							@foreach($flats as $flat)
								<option value="{{$flat->id}}">{{$flat->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-static">
						<label for="i0" class="control-label">Arrival Date</label>
						<input type="date" class="form-control" id="i0" name="arrival" required>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
			<hr>
			<center>
				<a href="{{URL::route('renterleft', $renter->id)}}">
					<button class="btn btn-raised btn-danger">Renter Left Flat</button>
				</a>
			</center>
		</div>
	</div>


@stop
