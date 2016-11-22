@extends('templates.default')

@section('head')
	<title>Home Owner's Assistant</title>
	<style type="text/css">
		body{
			background-color: rgb(241, 240, 241);
		}
	</style>
@stop

@section('content')

	<div class="container">
		<div>
			<h1 style="padding-top:35px;">
				<center>
					Home Owner's Assistant
				</center>
			</h1>
		</div>

		<div style="padding-top:100px">
			<center>
				<button class="btn btn-lg btn-raised">Sign in</button>
				<button class="btn btn-lg btn-raised">Sign Up</button>
			</center>
		</div>
	</div>

@stop