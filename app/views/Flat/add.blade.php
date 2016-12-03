@extends('templates.default')

@section('head')
	<title>Add A Flat Information</title>
@stop


@section('content')
	<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Add a Flat</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Name</label>
						<input type="text" class="form-control" id="i0" name="name" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Rent</label>
						<input type="text" class="form-control" id="i0" name="rent" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Number of Rooms</label>
						<input type="text" class="form-control" id="i0" name="cntrooms" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Number of Washrooms</label>
						<input type="text" class="form-control" id="i0" name="cntwashrooms" required>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Due Date</label>
						<input type="text" class="form-control" id="i0" name="duedate">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>
	</div>
@stop
