@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/auth/actions.signin.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/auth/actions.signin.description')}}</h3>
</div>
<div class="row">
	<form method="post" action="{{ route('signin') }}" class="form-horizontal">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

		<!-- Email -->
		<div class="control-group{{ $errors->first('email', ' error') }}">
			<label class="control-label" for="email">{{Lang::get('frontend/auth/labels.email')}}</label>
			<div class="controls">
				<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Password -->
		<div class="control-group{{ $errors->first('password', ' error') }}">
			<label class="control-label" for="password">{{Lang::get('frontend/auth/labels.password')}}</label>
			<div class="controls">
				<input type="password" name="password" id="password" value="" />
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Remember me -->
		<div class="control-group">
			<div class="controls">
			<label class="checkbox">
				<input type="checkbox" name="remember-me" id="remember-me" value="1" /> {{Lang::get('frontend/auth/labels.remember_me')}}
			</label>
			</div>
		</div>

		<hr>

		<!-- Form actions -->
		<div class="control-group">
			<div class="controls">
				<a class="btn btn-link" href="{{ route('home') }}">{{Lang::get('buttons.cancel')}}</a>

				<button type="submit" class="btn btn-primary">{{Lang::get('frontend/auth/actions.buttons.signin')}}</button>

				<a href="{{ route('forgot-password') }}" class="btn btn-link">{{Lang::get('frontend/account/labels.forgot_password')}}</a>
			</div>
		</div>
	</form>
</div>
@stop
