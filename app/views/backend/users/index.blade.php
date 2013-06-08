@extends('backend/layouts/default')

{{-- Traduction Laravel-france --}}
{{--  Maj:6/06/2013 - backend/users/index.php --}}

{{-- Page title --}}
@section('title')
{{Lang::get('backend/users/actions.index.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		{{Lang::get('backend/users/actions.index.description')}}

		<div class="pull-right">
			<a href="{{ route('create/user') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> {{Lang::get('backend/users/actions.buttons.create')}}</a>
		</div>
	</h3>
</div>

<a class="btn btn-medium" href="{{ URL::to('admin/users?withTrashed=true') }}">{{Lang::get('backend/users/actions.buttons.with_trashed')}}</a>
<a class="btn btn-medium" href="{{ URL::to('admin/users?onlyTrashed=true') }}">{{Lang::get('backend/users/actions.buttons.only_trashed')}}</a>

{{ $users->links() }}

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="span1">{{Lang::get('backend/users/table.id')}}</th>
			<th class="span2">{{Lang::get('backend/users/table.first_name')}}</th>
			<th class="span2">{{Lang::get('backend/users/table.last_name')}}</th>
			<th class="span3">{{Lang::get('backend/users/table.email')}}</th>
			<th class="span2">{{Lang::get('backend/users/table.activated')}}</th>
			<th class="span2">{{Lang::get('backend/users/table.created_at')}}</th>
			<th class="span2">{{Lang::get('backend/users/table.actions')}}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->first_name }}</td>
			<td>{{ $user->last_name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{Lang::get('backend/general.' . ($user->isActivated() ? 'yes' : 'no'))}}</td>
			<td>{{ $user->created_at->diffForHumans() }}</td>
			<td>
				<a href="{{ route('update/user', $user->id) }}" class="btn btn-mini">{{Lang::get('buttons.edit')}}</a>

				@if ( ! is_null($user->deleted_at))
				<a href="{{ route('restore/user', $user->id) }}" class="btn btn-mini btn-warning">{{Lang::get('buttons.restore')}}</a>
				@else
				@if (Sentry::getId() !== $user->id)
				<a href="{{ route('delete/user', $user->id) }}" class="btn btn-mini btn-danger">{{Lang::get('buttons.delete')}}</a>
				@else
				<span class="btn btn-mini btn-danger disabled">{{Lang::get('buttons.delete')}}</span>
				@endif
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $users->links() }}
@stop
