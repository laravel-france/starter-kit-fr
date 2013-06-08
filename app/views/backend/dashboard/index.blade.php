@extends('backend/layouts/default')

{{-- Traduction Laravel-france --}}
{{--  Maj:8/06/2013 - backend/dashboard/index.php --}}

{{-- Page title --}}
@section('title')
{{Lang::get('backend/dashboard/actions.index.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		{{Lang::get('backend/dashboard/actions.index.description')}}
	</h3>
</div>
@stop
