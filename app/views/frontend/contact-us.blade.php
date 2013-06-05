@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend.contact-us.section-title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend.contact-us.page-title')}}</h3>
</div>
<form method="post" action="">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<fieldset>
		<!-- Name -->
		<div  class="control-group{{ $errors->first('name', ' error') }}">
			<input type="text" id="name" name="name" class="input-block-level" placeholder="{{Lang::get('frontend.contact-us.name')}}">
			{{ $errors->first('name', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Email -->
		<div  class="control-group{{ $errors->first('email', ' error') }}">
			<input type="text" id="email" name="email" class="input-block-level" placeholder="{{Lang::get('frontend.contact-us.email')}}">
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>
		<!-- Description -->
		<div  class="control-group{{ $errors->first('description', ' error') }}">
			<textarea rows="4" id="description" name="description" class="input-block-level" placeholder="{{Lang::get('frontend.contact-us.description')}}"></textarea>
			{{ $errors->first('description', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Form actions -->
		<button type="submit" class="btn btn-primary pull-right">{{Lang::get('frontend.contact-us.submit')}}</button>
	</fieldset>
</form>
@stop
