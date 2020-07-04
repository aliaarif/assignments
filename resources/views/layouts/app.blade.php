<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="ThemeSelect">
	<title>MPS</title>
	<link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon-32x32.png') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-search.css') }}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/hover-effects/media-hover-effects.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/user-profile-page.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate-css/animate.css') }}">

	

</head>
<body id="body" class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>
	
	<div id="app">
		<app />
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
	
	<script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/custom/custom-script.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/scripts/customizer.js') }}" type="text/javascript"></script>
	<!-- <script src="{{ asset('js/scripts/ui-alerts.js') }}" type="text/javascript"></script> -->
	<!-- <script src="{{ asset('js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script> -->
	<script src="{{ asset('js/scripts/css-animation.js') }}" type="text/javascript"></script>
	
	<script>
		$(() => {

		});
	</script>
</body>
</html>

