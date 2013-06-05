@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend.welcome.section-title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend.welcome.page-title')}}</h3>
</div>

@stop
