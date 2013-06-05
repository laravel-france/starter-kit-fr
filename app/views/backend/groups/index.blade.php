@extends('backend/layouts/default')

{{-- Traduction Laravel-france --}}
{{--  Maj:5/06/2013 - backend.php --}}

{{-- Web site Title --}}
@section('title')
{{Lang::get('backend.groups.index.section-title')}}
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h3>
		{{Lang::get('backend.groups.index.page-title')}}

		<div class="pull-right">
			<a href="{{ route('create/group') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> {{Lang::get('backend.groups.index.buttons.create-group')}}</a>
		</div>
	</h3>
</div>

{{ $groups->links() }}

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="span1">{{Lang::get('backend.groups.index.table.id')}}</th>
			<th class="span6">{{Lang::get('backend.groups.index.table.name')}}</th>
			<th class="span2">{{Lang::get('backend.groups.index.table.users')}}</th>
			<th class="span2">{{Lang::get('backend.groups.index.table.created_at')}}</th>
			<th class="span2">{{Lang::get('backend.groups.index.table.actions')}}</th>
		</tr>
	</thead>
	<tbody>
		@if ($groups->count() >= 1)
		@foreach ($groups as $group)
		<tr>
			<td>{{ $group->id }}</td>
			<td>{{ $group->name }}</td>
			<td>{{ $group->users()->count() }}</td>
			<td>{{ $group->created_at->diffForHumans() }}</td>
			<td>
				<a href="{{ route('update/group', $group->id) }}" class="btn btn-mini">{{Lang::get('backend.button.edit')}}</a>
				<a href="{{ route('delete/group', $group->id) }}" class="btn btn-mini btn-danger">{{Lang::get('backend.button.delete')}}</a>
			</td>
		</tr>
		@endforeach
		@else
		<tr>
			<td colspan="5">{{Lang::get('backend.groups.index.table.no-results')}}</td>
		</tr>
		@endif
	</tbody>
</table>

{{ $groups->links() }}
@stop
