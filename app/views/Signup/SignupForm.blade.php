@extends("templates.default")

@section("head")
	<title>Signup</title>
@stop


@section("content")

	<div class="container">
		<div class="well" style="margin:60px 100px; padding:30px 50px;">
			<form method="post" target="">
				<h1 class="header">Sign Up</h1>
				<div class="inputs">
					<div class="form-group label-floating">
						<label for="i0" class="control-label">Name</label>
						<input type="email" class="form-control" id="i0">
					</div>

					<div class="form-group label-floating">
						<label for="i1" class="control-label">Email</label>
		    			<input type="email" class="form-control" id="i1">
					</div>

					<div class="form-group label-floating">
						<label for="i2" class="control-label">User Name</label>
						<input type="text" class="form-control" id="i2">
					</div>
					<div class="form-group label-floating">
						<label for="i3" class="control-label">Password</label>
						<input type="password" class="form-control" id="i3">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-raised teel">Submit</button>
			</form>
		</div>

	</div>

@stop
