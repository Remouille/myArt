<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>LARAVEL</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		{{ HTML::style('vendor/bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('css/main.css') }}
		{{ HTML::script('vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}
	</head>
	<body>
		<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->

		@include('inc.navbar')

		<div class="container">	
			@yield('content')
			
			<hr>
			<footer>
				<p>&copy; Company 2013</p>
			</footer>
		</div>


		{{ HTML::script('vendor/jquery-1.10.1.min.js') }}
		{{ HTML::script('vendor/bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('vendor/amcharts/amcharts.js') }}
		{{ HTML::script('vendor/amcharts/radar.js') }}
		{{ HTML::script('js/main.js') }}
	</body>
</html>
