@extends('templates.default')

@section('head')
	<title>Add Renter</title>
@stop


@section('content')
	<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Add a Renter</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Name</label>
						<input type="text" class="form-control" id="i0" name="name">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Gender</label>
						<input type="text" class="form-control" id="i0" name="gender">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Age</label>
						<input type="text" class="form-control" id="i0" name="age">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Profession</label>
						<input type="text" class="form-control" id="i0" name="profession">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Email</label>
						<input type="email" class="form-control" id="i0" name="email">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Contact</label>
						<input type="text" class="form-control" id="i0" name="contact">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">National ID</label>
						<input type="text" class="form-control" id="i0" name="nid">
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
						<input type="date" class="form-control" id="i0" name="arrival">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>
	</div>
@stop
