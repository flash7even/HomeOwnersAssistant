@extends('templates.default')

@section('head')
<title>Add a Maid</title>
@stop

@section('content')
<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Edit Maid Info</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Name</label>
						<input type="text" class="form-control" id="i0" name="name" value="{{$maid->name}}">
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Renter Name</label>
						<select class="form-control" name="renter">
							@foreach($renters as $renter)
								<option value="{{$renter->id}}" @if($renter->id == $maid->renters->first()->id) selected @endif>{{$renter->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">NID</label>
						<input type="text" class="form-control" id="i0" name="nid" value="{{$maid->nid}}">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>
	</div>
@stop