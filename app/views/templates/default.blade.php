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
	@yield('content')
	</body>
</html>