<!DOCTYPE html>
<html>
<head>
    <title>Notification de Candidature</title>
</head>
<body>
    <h1>Bonjour {{ $candidature->user->prenom }},</h1>
    <p>Votre candidature pour {{ $candidature->formation->titre }} a été acceptée.</p>
    <p>Merci d'utiliser notre application.</p>
</body>
</html>
