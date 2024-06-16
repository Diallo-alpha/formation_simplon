{{-- <!DOCTYPE html>
<html>
<head>
    <title>Notification de Candidature</title>
</head>
<body>
    <h1>Bonjour {{ $candidature->user_id }},</h1>
    <p>Votre candidature pour {{ $candidature->user_id }} a été acceptée.</p>
    <p>Merci d'utiliser notre application.</p>
</body>
</html> --}}

@component('mail::message')
# Candidature acceptée

Bonjour {{ $candidature->user->nom }},

Nous sommes heureux de vous informer que votre candidature pour {{ $candidature->formation->titre }} a été acceptée.

@component('mail::button', ['url' => url('/candidatures/'.$candidature->id)])
Voir la candidature
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

