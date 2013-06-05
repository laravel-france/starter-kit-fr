@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend.auth.forgot-password.section-title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend.auth.forgot-password.page-title')}}</h3>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Email -->
	<div class="control-group{{ $errors->first('email', ' error') }}">
		<label class="control-label" for="email">{{Lang::get('frontend.auth.forgot-password.email')}}</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>
	</div>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn" href="{{ route('home') }}">{{Lang::get('frontend.auth.forgot-password.cancel')}}</a>

			<button type="submit" class="btn btn-primary">{{Lang::get('frontend.auth.forgot-password.submit')}}</button>
		</div>
	</div>
</form>
@stop
