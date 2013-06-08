@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/auth/actions.forgot-password-confirm.title')}}
Forgot Password ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/auth/actions.forgot-password-confirm.description')}}</h3>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- New Password -->
	<div class="control-group{{ $errors->first('password', ' error') }}">
		<label class="control-label" for="password">{{Lang::get('frontend/auth/labels.new_password')}}</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="{{ Input::old('password') }}" />
			{{ $errors->first('password', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Password Confirm -->
	<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
		<label class="control-label" for="password_confirm">{{Lang::get('frontend/auth/labels.new_password_confirm')}}</label>
		<div class="controls">
			<input type="password" name="password_confirm" id="password_confirm" value="{{ Input::old('confirm-password') }}" />
			{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('home') }}">{{Lang::get('buttons.cancel')}}</a>
			<button type="submit" class="btn btn-primary">{{Lang::get('frontend/auth/actions.buttons.forgot-password-confirm')}}</button>
		</div>
	</div>
</form>
@stop
