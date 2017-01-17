<!DOCTYPE html>
<html>
<head>
	<title>Adminator @yield('title')</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.teal-red.min.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
</head>
<body>

	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		@include('layouts.header')
		<main class="mdl-layout__content mdl-color--grey-100">
    		@yield('content')
  		</main>
	</div>
	
	<script defer type="text/javascript" src="{{asset('js/Chart.bundle.min.js')}}"></script>
	<script defer src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script defer src="{{asset('js/script.js')}}"></script>
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>

</html>