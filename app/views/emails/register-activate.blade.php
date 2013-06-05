@extends('emails/layouts/default')

<!-- Traduction Laravel-france  -->
<!-- Maj:2/05/2013 - frontend.php -->

@section('content')
<p>Bonjour {{ $user->first_name }},</p>

<p>Bienvenue sur SiteNameHere!, validez votre inscription en cliquant sur le lien ci-dessous :</p>

<p><a href="{{ $activationUrl }}">{{ $activationUrl }}</a></p>

<p>Cordialement,</p>

<p>L'équipe du site.</p>
@stop
