<!DOCTYPE html>
<html>
<head>
    <title>Notification de Candidature</title>
</head>
<body>
    <h1>Bonjour {{ $candidature->user_id }},</h1>
    <p>Votre candidature pour {{ $candidature->user_id }} a été acceptée.</p>
    <p>Merci d'utiliser notre application.</p>
</body>
</html>
