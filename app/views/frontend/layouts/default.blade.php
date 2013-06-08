<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend/form.php -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title') ::
			{{Lang::get('commons.site-title')}}
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
			padding: 10px 0;
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
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>

						<div class="nav-collapse collapse">
							<ul class="nav">
								<li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ route('home') }}"><i class="icon-home icon-white"></i> {{Lang::get('frontend/menu.home')}}</a></li>
								<li {{ (Request::is('about-us') ? 'class="active"' : '') }}><a href="{{ URL::to('about-us') }}"><i class="icon-file icon-white"></i> {{Lang::get('frontend/menu.about-us')}}</a></li>
								<li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}"><i class="icon-file icon-white"></i> {{Lang::get('frontend/menu.contact-us')}}</a></li>
							</ul>

							<ul class="nav pull-right">
								@if (Sentry::check())

								<li class="dropdown{{ (Request::is('account*') ? ' active' : '') }}">
									<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ route('account') }}">
										{{Lang::get('frontend/menu.user.welcome')}}{{Sentry::getUser()->first_name}}
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										@if(Sentry::getUser()->hasAccess('admin'))
										<li><a href="{{ route('admin') }}"><i class="icon-cog"></i> {{Lang::get('frontend/menu.user.submenus.admin')}}</a></li>
										@endif
										<li{{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><i class="icon-user"></i> {{Lang::get('frontend/menu.user.submenus.profile')}}</a></li>
										<li class="divider"></li>
										<li><a href="{{ route('logout') }}"><i class="icon-off"></i> {{Lang::get('frontend/menu.user.submenus.logout')}}</a></li>
									</ul>
								</li>
								@else
								<li {{ (Request::is('auth/signin') ? 'class="active"' : '') }}><a href="{{ route('signin') }}">{{Lang::get('frontend/menu.signin')}}</a></li>
								<li {{ (Request::is('auth/signup') ? 'class="active"' : '') }}><a href="{{ route('signup') }}">{{Lang::get('frontend/menu.signup')}}</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Notifications -->
			@include('notifications')

			<!-- Content -->
			@yield('content')

			<hr />

			<!-- Footer -->
			<footer>
				<p>{{Lang::get('commons.copyright')}}</p>
			</footer>
		</div>

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('assets/js/jquery-1.10.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap-2.3.2.min.js') }}"></script>
	</body>
</html>
