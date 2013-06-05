<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend/form.php -->

@if ($errors->any())
<div class="alert alert-error alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>{{Lang::get('notifications.title.error')}}</h4>
	{{Lang::get('notifications.any-error-message')}}
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>{{Lang::get('notifications.title.success')}}</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-error alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>{{Lang::get('notifications.title.error')}}</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>{{Lang::get('notifications.title.warning')}}</h4>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>{{Lang::get('notifications.title.info')}}</h4>
	{{ $message }}
</div>
@endif