@extends('error/layouts/defaut')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - 403.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('error.403.title')}}
@stop

{{-- Error page content --}}
@section('content')
	<div class="wrapper">
		<div class="error-spacer"></div>
		<div role="main" class="main">
			<h1>{{Lang::get('error.403.description')}}</h1>

			<h2>{{Lang::get('error.403.error')}}</h2>

			<hr>

			<h3>{{Lang::get('error.403.meaning')}}</h3>

			<p>
				{{Lang::get('error.403.reason')}}
			</p>

			<p>
				{{Lang::get('error.403.redirect')}}
			</p>
		</div>
	</div>
@stop
