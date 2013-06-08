@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/pages/contact-us.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/pages.contact-us.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/pages.contact-us.description')}}</h3>
</div>
<form method="post" action="">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<fieldset>
		<!-- Name -->
		<div  class="control-group{{ $errors->first('name', ' error') }}">
			<input type="text" id="name" name="name" class="input-block-level" placeholder="{{Lang::get('frontend/pages.contact-us.name')}}">
			{{ $errors->first('name', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Email -->
		<div  class="control-group{{ $errors->first('email', ' error') }}">
			<input type="text" id="email" name="email" class="input-block-level" placeholder="{{Lang::get('frontend/pages.contact-us.email')}}">
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>
		<!-- Content -->
		<div  class="control-group{{ $errors->first('content', ' error') }}">
			<textarea rows="4" id="content" name="content" class="input-block-level" placeholder="{{Lang::get('frontend/pages.contact-us.message')}}"></textarea>
			{{ $errors->first('content', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Form actions -->
		<button type="submit" class="btn btn-primary pull-right">{{Lang::get('buttons.send')}}</button>
	</fieldset>
</form>
@stop
