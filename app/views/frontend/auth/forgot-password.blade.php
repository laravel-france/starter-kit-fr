@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/auth/actions.forgot-password.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/auth/actions.forgot-password.description')}}</h3>
</div>
<form method="post" action="" class="form-horizontal">
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

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
      <a class="btn btn-link" href="{{ route('home') }}">{{Lang::get('buttons.cancel')}}</a>

			<button type="submit" class="btn btn-primary">{{Lang::get('frontend/auth/actions.buttons.forgot-password')}}</button>
		</div>
	</div>
</form>
@stop
