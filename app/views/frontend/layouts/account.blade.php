@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page content --}}
@section('content')
<div class="row">
	<div class="span3">
		<ul class="nav nav-list">
			<li class="nav-header">{{Lang::get('frontend.account.menu.menu-title')}}</li>
			<li{{ Request::is('account/profile') ? ' class="active"' : '' }}><a href="{{ URL::route('profile') }}">{{Lang::get('frontend.account.menu.profile')}}</a></li>
			<li{{ Request::is('account/change-password') ? ' class="active"' : '' }}><a href="{{ URL::route('change-password') }}">{{Lang::get('frontend.account.menu.change-password')}}</a></li>
			<li{{ Request::is('account/change-email') ? ' class="active"' : '' }}><a href="{{ URL::route('change-email') }}">{{Lang::get('frontend.account.menu.change-email')}}</a></li>
		</ul>
	</div>
	<div class="span9">
		@yield('account-content')
	</div>
</div>
@stop
