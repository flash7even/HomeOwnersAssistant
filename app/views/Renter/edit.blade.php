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
						<input type="text" class="form-control" id="i0" name="name" value="{{$renter->name}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Gender</label>
						<input type="text" class="form-control" id="i0" name="gender" value="{{$renter->gender}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Age</label>
						<input type="text" class="form-control" id="i0" name="age" value="{{$renter->age}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Profession</label>
						<input type="text" class="form-control" id="i0" name="profession" value="{{$renter->profession}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Email</label>
						<input type="email" class="form-control" id="i0" name="email" value="{{$renter->email}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Contact</label>
						<input type="text" class="form-control" id="i0" name="contact" value="{{$renter->contact}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">National ID</label>
						<input type="text" class="form-control" id="i0" name="nid" value="{{$renter->nid}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Flat</label>
						<select name="flat" class="form-control">
							@foreach($flats as $flat)
								<option>{{$flat->id}}
							@endforeach
						</select>
					</div>

					<div class="form-group label-static">
						<label for="i0" class="control-label">Arrival Date</label>
						<input type="date" class="form-control" id="i0" name="arrival">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
			<hr>
			<center>
				<a href="?left=1">
					<button class="btn btn-raised btn-danger">Delete</button>
				</a>
			</center>
		</div>
	</div>


@stop
