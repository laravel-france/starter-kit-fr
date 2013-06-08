@extends('frontend/layouts/account')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/account/change-password.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/account/actions.change-password.title')}}
@stop

{{-- Account page content --}}
@section('account-content')
<div class="page-header">
	<h4>{{Lang::get('frontend/account/actions.change-password.description')}}</h4>
</div>

<form method="post" action="" class="form-horizontal" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Old Password -->
	<div class="control-group{{ $errors->first('old_password', ' error') }}">
		<label class="control-label" for="old_password">{{Lang::get('frontend/account/labels.old_password')}}</label>
		<div class="controls">
			<input type="password" name="old_password" id="old_password" value="" />
			{{ $errors->first('old_password', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- New Password -->
	<div class="control-group{{ $errors->first('password', ' error') }}">
		<label class="control-label" for="password">{{Lang::get('frontend/account/labels.new_password')}}</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="" />
			{{ $errors->first('password', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Confirm New Password  -->
	<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
		<label class="control-label" for="password_confirm">{{Lang::get('frontend/account/labels.password_confirm')}}</label>
		<div class="controls">
			<input type="password" name="password_confirm" id="password_confirm" value="" />
			{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<hr>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
      <a class="btn btn-link" href="{{ route('home') }}">{{Lang::get('buttons.cancel')}}</a>
			<button type="submit" class="btn btn-primary">{{Lang::get('frontend/account/actions.buttons.update-password')}}</button>

			<a href="{{ route('forgot-password') }}" class="btn btn-link">{{Lang::get('frontend/account/labels.forgot_password')}}</a>
		</div>
	</div>
</form>
@stop
