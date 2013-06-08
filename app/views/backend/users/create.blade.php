@extends('backend/layouts/default')

{{-- Traduction Laravel-france --}}
{{--  Maj:6/06/2013 - backend/users/edit.php --}}

{{-- Page title --}}
@section('title')
{{Lang::get('backend/users/actions.create.title')}}
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		{{Lang::get('backend/users/actions.create.description')}}

		<div class="pull-right">
			<a href="{{ route('users') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> {{Lang::get('buttons.back')}}</a>
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
			<!-- First Name -->
			<div class="control-group {{ $errors->has('first_name') ? 'error' : '' }}">
				<label class="control-label" for="first_name">{{Lang::get('backend/users/labels.first_name')}}</label>
				<div class="controls">
					<input type="text" name="first_name" id="first_name" value="{{ Input::old('first_name') }}" />
					{{ $errors->first('first_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Last Name -->
			<div class="control-group {{ $errors->has('last_name') ? 'error' : '' }}">
				<label class="control-label" for="last_name">{{Lang::get('backend/users/labels.last_name')}}</label>
				<div class="controls">
					<input type="text" name="last_name" id="last_name" value="{{ Input::old('last_name') }}" />
					{{ $errors->first('last_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Email -->
			<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
				<label class="control-label" for="email">{{Lang::get('backend/users/labels.email')}}</label>
				<div class="controls">
					<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
					{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Password -->
			<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
				<label class="control-label" for="password">{{Lang::get('backend/users/labels.password')}}</label>
				<div class="controls">
					<input type="password" name="password" id="password" value="" />
					{{ $errors->first('password', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Password Confirm -->
			<div class="control-group {{ $errors->has('password_confirm') ? 'error' : '' }}">
				<label class="control-label" for="password_confirm">{{Lang::get('backend/users/labels.password_confirm')}}</label>
				<div class="controls">
					<input type="password" name="password_confirm" id="password_confirm" value="" />
					{{ $errors->first('password_confirm', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Activation Status -->
			<div class="control-group {{ $errors->has('activated') ? 'error' : '' }}">
				<label class="control-label" for="activated">{{Lang::get('backend/users/labels.activated')}}</label>
				<div class="controls">
					<select name="activated" id="activated">
						<option value="1"{{ (Input::old('activated', 0) === 1 ? ' selected="selected"' : '') }}>{{Lang::get('backend/general.yes')}}</option>
						<option value="0"{{ (Input::old('activated', 0) === 0 ? ' selected="selected"' : '') }}>{{Lang::get('backend/general.no')}}</option>
					</select>
					{{ $errors->first('activated', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<!-- Groups -->
			<div class="control-group {{ $errors->has('groups') ? 'error' : '' }}">
				<label class="control-label" for="groups">{{Lang::get('backend/users/labels.groups')}}</label>
				<div class="controls">
					<select name="groups[]" id="groups[]" multiple="multiple">
						@foreach ($groups as $group)
						<option value="{{ $group->id }}"{{ (in_array($group->id, $selectedGroups) ? ' selected="selected"' : '') }}>{{ $group->name }}</option>
						@endforeach
					</select>

					<span class="help-block">
						{{Lang::get('backend/users/labels.groups_help')}}
					</span>
				</div>
			</div>
		</div>

		<!-- Permissions tab -->
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
									<input type="radio" value="-1" id="{{ $permission['permission'] }}_deny" name="permissions[{{ $permission['permission'] }}]"{{ (array_get($selectedPermissions, $permission['permission']) === -1 ? ' checked="checked"' : '') }}>
									{{Lang::get('backend/general.deny')}}
								</label>
							</div>

							@if ($permission['can_inherit'])
							<div class="radio inline">
								<label for="{{ $permission['permission'] }}_inherit" onclick="">
									<input type="radio" value="0" id="{{ $permission['permission'] }}_inherit" name="permissions[{{ $permission['permission'] }}]"{{ ( ! array_get($selectedPermissions, $permission['permission']) ? ' checked="checked"' : '') }}>
									{{Lang::get('backend/general.inherit')}}
								</label>
							</div>
							@endif
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
			<a class="btn btn-link" href="{{ route('users') }}">{{Lang::get('buttons.cancel')}}</a>

			<button type="reset" class="btn">{{Lang::get('buttons.reset')}}</button>

			<button type="submit" class="btn btn-success">{{Lang::get('backend/users/actions.buttons.create')}}</button>
		</div>
	</div>
</form>
@stop
