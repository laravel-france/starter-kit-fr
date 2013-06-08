@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/auth/actions.signup.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/auth/actions.signup.description')}}</h3>
</div>
<div class="row">
	<form method="post" action="{{ route('signup') }}" class="form-horizontal" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

		<!-- First Name -->
		<div class="control-group{{ $errors->first('first_name', ' error') }}">
		<label class="control-label" for="first_name">{{Lang::get('frontend/auth/labels.first_name')}}</label>
			<div class="controls">
				<input type="text" name="first_name" id="first_name" value="{{ Input::old('first_name') }}" />
				{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Last Name -->
		<div class="control-group{{ $errors->first('last_name', ' error') }}">
			<label class="control-label" for="last_name">{{Lang::get('frontend/auth/labels.last_name')}}</label>
			<div class="controls">
				<input type="text" name="last_name" id="last_name" value="{{ Input::old('last_name') }}" />
				{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Email -->
		<div class="control-group{{ $errors->first('email', ' error') }}">
			<label class="control-label" for="email">{{Lang::get('frontend/auth/labels.email')}}</label>
			<div class="controls">
				<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Email Confirm -->
		<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
			<label class="control-label" for="email_confirm">{{Lang::get('frontend/auth/labels.email_confirm')}}</label>
			<div class="controls">
				<input type="text" name="email_confirm" id="email_confirm" value="{{ Input::old('email_confirm') }}" />
				{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
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

		<!-- Password Confirm -->
		<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
			<label class="control-label" for="password_confirm">{{Lang::get('frontend/auth/labels.password_confirm')}}</label>
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

				<button type="submit" class="btn btn-primary">{{Lang::get('frontend/auth/actions.buttons.signup')}}</button>
			</div>
		</div>
	</form>
</div>
@stop
