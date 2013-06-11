<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title') ::
			{{Config::get('site.title')}}
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{ asset('assets/css/bootstrap-2.3.2.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/bootstrap-responsive-2.3.2.min.css') }}" rel="stylesheet">

		<style>
		@section('styles')
		body {
			padding: 60px 0;
		}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
	</head>

	<body>
		<!-- Container -->
		<div class="container">
			<!-- Navbar -->
      @include('backend/layouts/_navbar')

			<!-- Notifications -->
			@include('notifications')

			<!-- Content -->
			@yield('content')

			<hr />

			<!-- Footer -->
      @include('backend/layouts/_footer')
		</div>

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('assets/js/jquery-1.10.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap-2.3.2.min.js') }}"></script>
	</body>
</html>
