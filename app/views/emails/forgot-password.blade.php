@extends('emails/layouts/default')

@section('content')
<p>Bonjour {{ $user->first_name }},</p>

<p>Cliquez sur le lien ci-dessous pour récupérer votre mot de passe :</p>

<p><a href="{{ $forgotPasswordUrl }}">{{ $forgotPasswordUrl }}</a></p>

<p>Cordialement,</p>

<p>L'équipe du site.</p>
@stop
