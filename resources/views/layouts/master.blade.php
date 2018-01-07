<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

	<link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

	<style>
	@media (max-width: 740px) {
		.full-height,
		.full-height body,
		.full-height header,
		.full-height header .view {
			height: 700px; 
		} 
	}
	</style>

</head>
<body>
	<div id="app">
		@yield('menu')
		@yield('content')
		@yield('footer')
	</div>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/mdbprot.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>