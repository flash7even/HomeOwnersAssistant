@extends('templates.default')

@section('head')
<title>Edit Flat Details</title>
@stop


@section('content')

<div class="container">
	<div class="well" style="margin:60px 100px; padding:30px 50px;">
		<form method="post" target="">
			<h1 class="header">Edit Flat Details</h1>
			<div class="inputs">

				<div class="form-group label-floating">
					<label for="i0" class="control-label">Rent</label>
					<input type="text" class="form-control" id="i0" name="rent" value="{{$flat->rent}}">
				</div>

				<div class="form-group label-floating">
					<label for="i0" class="control-label">Number of Rooms</label>
					<input type="text" class="form-control" id="i0" name="cntrooms" value="{{$flat->cntrooms}}">
				</div>

				<div class="form-group label-floating">
					<label for="i0" class="control-label">Number of Washrooms</label>
					<input type="text" class="form-control" id="i0" name="cntwashrooms" value="{{$flat->cntwashrooms}}">
				</div>

				<div class="form-group label-floating">
					<label for="i0" class="control-label">Due Date</label>
					<input type="text" class="form-control" id="i0" name="duedate" value="{{$flat->duedate}}">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-raised teel">Submit</button>
		</form>
	</div>


</div>

@stop
