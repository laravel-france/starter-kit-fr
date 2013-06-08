@extends('frontend/layouts/account')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/account/change-email.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/account/actions.change-email.title')}}
@stop

{{-- Account page content --}}
@section('account-content')
<div class="page-header">
	<h4>{{Lang::get('frontend/account/actions.change-email.description')}}</h4>
</div>

<form method="post" action="" class="form-horizontal" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Form type -->
	<input type="hidden" name="formType" value="change-email" />

	<!-- New Email -->
	<div class="control-group{{ $errors->first('email', ' error') }}">
		<label class="control-label" for="email">{{Lang::get('frontend/account/labels.new_email')}}</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="" />
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Confirm New Email -->
	<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
		<label class="control-label" for="email_confirm">{{Lang::get('frontend/account/labels.email_confirm')}}</label>
		<div class="controls">
			<input type="text" name="email_confirm" id="email_confirm" value="" />
			{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Current Password -->
	<div class="control-group{{ $errors->first('current_password', ' error') }}">
		<label class="control-label" for="current_password">{{Lang::get('frontend/account/labels.password')}}</label>
		<div class="controls">
			<input type="password" name="current_password" id="current_password" value="" />
			{{ $errors->first('current_password', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<hr>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
      <a class="btn btn-link" href="{{ route('home') }}">{{Lang::get('buttons.cancel')}}</a>
			<button type="submit" class="btn btn-primary">{{Lang::get('frontend/account/actions.buttons.update-email')}}</button>

			<a href="{{ route('forgot-password') }}" class="btn btn-link">{{Lang::get('frontend/account/labels.forgot_password')}}</a>
		</div>
	</div>
</form>
@stop
