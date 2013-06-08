@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/account/menu.php -->

{{-- Page content --}}
@section('content')
<div class="row">
	<div class="span3">
		<ul class="nav nav-list">
			<li class="nav-header">{{Lang::get('frontend/account/menu.profile.title')}}</li>
			<li{{ Request::is('account/profile') ? ' class="active"' : '' }}><a href="{{ URL::route('profile') }}">{{Lang::get('frontend/account/menu.profile.submenus.profile')}}</a></li>
			<li{{ Request::is('account/change-password') ? ' class="active"' : '' }}><a href="{{ URL::route('change-password') }}">{{Lang::get('frontend/account/menu.profile.submenus.password')}}</a></li>
			<li{{ Request::is('account/change-email') ? ' class="active"' : '' }}><a href="{{ URL::route('change-email') }}">{{Lang::get('frontend/account/menu.profile.submenus.email')}}</a></li>
		</ul>
	</div>
	<div class="span9">
		@yield('account-content')
	</div>
</div>
@stop
