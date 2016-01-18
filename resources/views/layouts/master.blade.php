<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pluto</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			padding-top: 70px;


		}
		.inRange {
			font-weight: 900;
			color: white;
			background-color: green;
			}
		.outRange{
			font-weight: 900;
			color: white;
			background-color: red;
		}
		.hot{
			font-weight: 900;
			color: red;
		}
		caption{
			color: black;
		}


	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container-fluid">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="http://pluto">Pluto</a>
	            <a class="navbar-brand" href="http://test.gon/solutions">Solutions</a>
	            <a class="navbar-brand" href="http://test.gon/ovens">Ovens</a>	            
	        </div>

	    </div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid">
		@yield('content')
	</div>

	<hr/>

	<div class="container-fluid">
	    &copy; {{ date('Y') }}</a>
	    <br/>
	</div>

	<!-- Scripts -->
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0-beta2/Chart.min.js"></script>        
        <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
        {{--{!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!} --}}

        @yield('before-scripts-end')
        {{-- {!! Html::script(elixir('js/frontend.js')) !!} --}}
        @yield('after-scripts-end')

        {{-- @include('includes.partials.ga') --}}
</body>
</html>