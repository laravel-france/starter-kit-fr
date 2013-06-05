@extends('backend/layouts/default')

{{-- Traduction Laravel-france --}}
{{--  Maj:2/05/2013 - backend.php --}}

{{-- Page title --}}
@section('title')
{{Lang::get('backend.users.index.section-title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		{{Lang::get('backend.users.index.page-title')}}

		<div class="pull-right">
			<a href="{{ route('create/user') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> {{Lang::get('backend.users.index.buttons.create-user')}}</a>
		</div>
	</h3>
</div>

<a class="btn btn-medium" href="{{ URL::to('admin/users?withTrashed=true') }}">{{Lang::get('backend.users.index.buttons.users-with-trashed')}}</a>
<a class="btn btn-medium" href="{{ URL::to('admin/users?onlyTrashed=true') }}">{{Lang::get('backend.users.index.buttons.users-only-trashed')}}</a>

{{ $users->links() }}

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="span1">{{Lang::get('backend.users.index.table.id')}}</th>
			<th class="span2">{{Lang::get('backend.users.index.table.first_name')}}</th>
			<th class="span2">{{Lang::get('backend.users.index.table.last_name')}}</th>
			<th class="span3">{{Lang::get('backend.users.index.table.email')}}</th>
			<th class="span2">{{Lang::get('backend.users.index.table.activated')}}</th>
			<th class="span2">{{Lang::get('backend.users.index.table.created_at')}}</th>
			<th class="span2">{{Lang::get('backend.users.index.table.actions')}}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->first_name }}</td>
			<td>{{ $user->last_name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{Lang::get('backend.general.' . ($user->isActivated() ? 'yes' : 'no'))}}</td>
			<td>{{ $user->created_at->diffForHumans() }}</td>
			<td>
				<a href="{{ route('update/user', $user->id) }}" class="btn btn-mini">{{Lang::get('backend.button.edit')}}</a>

				@if ( ! is_null($user->deleted_at))
				<a href="{{ route('restore/user', $user->id) }}" class="btn btn-mini btn-warning">{{Lang::get('backend.button.restore')}}</a>
				@else
				@if (Sentry::getId() !== $user->id)
				<a href="{{ route('delete/user', $user->id) }}" class="btn btn-mini btn-danger">{{Lang::get('backend.button.delete')}}</a>
				@else
				<span class="btn btn-mini btn-danger disabled">{{Lang::get('backend.button.delete')}}</span>
				@endif
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $users->links() }}
@stop
