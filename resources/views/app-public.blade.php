<!doctype html>
<html class="no-js" lang="en">
	<head>
	
	<meta charset="utf-8" />
	
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>DesafioW</title>
	
	<link rel="stylesheet" href="{{ asset('/css/foundation.css') }}" />
	
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,700' rel='stylesheet' type='text/css'>
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

	</head>

	<body>


	<div class="row row-full">
		@yield('content')
	</div>  

	<!-- Scripts -->
	<script src="{{ asset('/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/what-input.min.js') }}"></script>
    <script src="{{ asset('/js/foundation.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>


	</body>

</html>