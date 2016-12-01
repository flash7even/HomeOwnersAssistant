<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="{{ Request::url(); }}" />
		
		<!-- stylesheet-->

		{{ HTML::style("assets/bootstrap/css/bootstrap.min.css") }}

		{{ HTML::script("assets/jquery/jquery-3.1.1.min.js") }}

		{{ HTML::script("assets/bootstrap/js/bootstrap.min.js") }}

		{{ HTML::style("assets/bootstrap-material/css/bootstrap-material-design.min.css") }}

		{{ HTML::style("assets/bootstrap-material/css/ripples.min.css") }}

		{{ HTML::script("assets/bootstrap-material/js/material.min.js") }}

		{{ HTML::script("assets/bootstrap-material/js/ripples.min.js") }}

		<script type="text/javascript">
			$(function(){
				$.material.init();
			})
		</script>


		<!--end of stylesheet-->

		<!-- fonts -->
		<!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">-->
		<!-- end of fonts -->

		<!-- Custom style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}">
		<!-- End of Custom style sheet -->

		@yield('head')




	</head>

	<body>
	@if(!in_array(Request::path(), array('/', 'login', 'signup')))
		<div class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="javascript:void(0)">{{User::getCurrentUser()->name}}</a>
      				
    			</div>
    			<div class="navbar-collapse collapse navbar-responsive-collapse">
	      			<ul class="nav navbar-nav">
	      				<?php
	      					$menus = array(
	      								array(
	      									'url'	=> '/dashboard',
	      									'text'	=> 'Dashboard'
	      								),
	      								array(
	      									'url'	=>'/payment/all',
	      									'text'	=>'Payment Details'
	      								),
	      								array(
	      									'url'	=> '/renterdetails',
	      									'text'	=> 'Renter Details'
	      								),
	      								array(
	      									'url'	=> '/flatdetails',
	      									'text'	=> 'Flat Details'
	      								),
	      								array(
	      									'url'	=>'/parking',
	      									'text'	=>'Parking Details'
	      								)
	      							)
	      				?>
	      				@foreach($menus as $menu)
	      					<li @if(('/'.Request::path()) == $menu['url']) class="active" @endif ><a href="{{$menu['url']}}" >{{$menu['text']}}</a></li>
	      				@endforeach
	        		</ul>
        		</div>
        	</div>
        </div>
	@endif
	@yield('content')
	</body>
</html>