@extends('frontend/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:7/06/2013 - frontend/pages/home.php -->

{{-- Page title --}}
@section('title')
{{Lang::get('frontend/pages.home.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>{{Lang::get('frontend/pages.home.description')}}</h3>
</div>

@stop
