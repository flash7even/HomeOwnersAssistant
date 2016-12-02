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
				<a href="login"><button class="btn btn-lg btn-raised">Sign in</button></a>
				&bull;
				<a href="signup"><button class="btn btn-lg btn-raised">Sign Up</button></a>
			</center>
		</div>
	</div>

@stop
