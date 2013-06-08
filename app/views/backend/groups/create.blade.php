@extends('backend/layouts/default')

{{-- Traduction Laravel-france --}}
{{--  Maj:6/06/2013 - backend/groups/edit.php --}}

{{-- Page title --}}
@section('title')
{{Lang::get('backend/groups/actions.create.title')}} ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		{{Lang::get('backend/groups/actions.create.description')}}

		<div class="pull-right">
			<a href="{{ route('groups') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> {{Lang::get('buttons.back')}}</a>
		</div>
	</h3>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab">{{Lang::get('backend/general.tabs.general')}}</a></li>
	<li><a href="#tab-permissions" data-toggle="tab">{{Lang::get('backend/general.tabs.permissions')}}</a></li>
</ul>

<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
		<div class="tab-pane active" id="tab-general">
			<!-- Name -->
			<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				<label class="control-label" for="name">{{Lang::get('backend/groups/labels.name')}}</label>
				<div class="controls">
					<input type="text" name="name" id="name" value="{{ Input::old('name') }}" />
					{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
		</div>

		<!-- Tab Permissions -->
		<div class="tab-pane" id="tab-permissions">
			<div class="control-group">
				<div class="controls">

					@foreach ($permissions as $area => $permissions)
					<fieldset>
						<legend>{{ $area }}</legend>

						@foreach ($permissions as $permission)
						<div class="control-group">
							<label class="control-group">{{ $permission['label'] }}</label>

							<div class="radio inline">
								<label for="{{ $permission['permission'] }}_allow" onclick="">
									<input type="radio" value="1" id="{{ $permission['permission'] }}_allow" name="permissions[{{ $permission['permission'] }}]"{{ (array_get($selectedPermissions, $permission['permission']) === 1 ? ' checked="checked"' : '') }}>
									{{Lang::get('backend/general.allow')}}
								</label>
							</div>

							<div class="radio inline">
								<label for="{{ $permission['permission'] }}_deny" onclick="">
									<input type="radio" value="0" id="{{ $permission['permission'] }}_deny" name="permissions[{{ $permission['permission'] }}]"{{ ( ! array_get($selectedPermissions, $permission['permission']) ? ' checked="checked"' : '') }}>
									{{Lang::get('backend/general.deny')}}
								</label>
							</div>
						</div>
						@endforeach

					</fieldset>
					@endforeach

				</div>
			</div>
		</div>
	</div>

	<!-- Form Actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('groups') }}">{{Lang::get('buttons.cancel')}}</a>

			<button type="reset" class="btn">{{Lang::get('buttons.reset')}}</button>

			<button type="submit" class="btn btn-success">{{Lang::get('backend/groups/actions.buttons.create')}}</button>
		</div>
	</div>
</form>
@stop
