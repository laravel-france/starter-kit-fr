@extends('frontend/layouts/account')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/account/profile.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/account/actions.profile.title')}}
@stop

{{-- Account page content --}}
@section('account-content')
<div class="page-header">
	<h4>{{Lang::get('frontend/account/actions.profile.description')}}</h4>
</div>

<form method="post" action="" class="form-vertical" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- First Name -->
	<div class="control-group{{ $errors->first('first_name', ' error') }}">
		<label class="control-label" for="first_name">{{Lang::get('frontend/account/labels.first_name')}}</label>
		<div class="controls">
			<input class="span4" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $user->first_name) }}" />
			{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Last Name -->
	<div class="control-group{{ $errors->first('last_name', ' error') }}">
		<label class="control-label" for="last_name">{{Lang::get('frontend/account/labels.last_name')}}</label>
		<div class="controls">
			<input class="span4" type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $user->last_name) }}" />
			{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Website URL -->
	<div class="control-group{{ $errors->first('website', ' error') }}">
		<label class="control-label" for="website">{{Lang::get('frontend/account/labels.website')}}</label>
		<div class="controls">
			<input class="span4" type="text" name="website" id="website" value="{{ Input::old('website', $user->website) }}" />
			{{ $errors->first('website', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Country -->
	<div class="control-group{{ $errors->first('country', ' error') }}">
		<label class="control-label" for="country">{{Lang::get('frontend/account/labels.country')}}</label>
		<div class="controls">
			<input class="span4" type="text" name="country" id="country" value="{{ Input::old('country', $user->country) }}" />
			{{ $errors->first('country', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Gravatar Email -->
	<div class="control-group{{ $errors->first('gravatar', ' error') }}">
		<label class="control-label" for="gravatar">{{Lang::get('frontend/account/labels.gravatar_email')}}</label>
		<div class="controls">
			<input class="span4" type="text" name="gravatar" id="gravatar" value="{{ Input::old('gravatar', $user->gravatar) }}" />
			{{ $errors->first('gravatar', '<span class="help-block">:message</span>') }}
		</div>

		<p>
			<img src="//secure.gravatar.com/avatar/{{ md5(strtolower(trim($user->gravatar))) }}" width="30" height="30" />
			<a href="http://gravatar.com">{{Lang::get('frontend/account/labels.gravatar_change')}}</a>.
		</p>
	</div>

	<hr>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
      <a class="btn btn-link" href="{{ route('home') }}">{{Lang::get('buttons.cancel')}}</a>
			<button type="submit" class="btn btn-primary">{{Lang::get('frontend/account/actions.buttons.update-profile')}}</button>
		</div>
	</div>
</form>
@stop
