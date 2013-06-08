@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/pages/about-us.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/pages.about-us.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/pages.about-us.description')}}</h3>
</div>

@stop
