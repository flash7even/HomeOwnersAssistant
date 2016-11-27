@extends('templates.default')

@section('head')
<title>Add new Payment</title>
@stop

@section('content')

<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Add a Payment</h1>
				<div class="inputs">

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Renter's Name</label>
						<select type="text" class="form-control" id="i0" name="renter">
							@foreach($renters as $renter)
								<option value="{{$renter->id}}">{{$renter->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Month</label>
						<select type="text" class="form-control" id="i0" name="month">
							<?php
								for($i=1; $i<=12; $i++)
								{
									echo "<option value='".$i."'> ".$i."</option>";
								}
							?>
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Year</label>
						<select type="text" class="form-control" id="i0" name="year">
							<?php
								for($i=2010; $i<=2020; $i++)
								{
									echo "<option value='".$i."'> ".$i."</option>";
								}
							?>
						</select>
					</div>

					<div class="form-group label-floating">
						<label for="i0" class="control-label">Amount</label>
						<input type="text" class="form-control" id="i0" name="amount">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>
	</div>

@stop