<!DOCTYPE html>
<html>
<head>
    <title>Rejet de Candidature</title>
</head>
<body>
    <h1>Bonjour, {{ $candidature->user->prenom }}.</h1>
    <p>Nous sommes désolés de vous informer que votre candidature pour {{ $candidature->formation->titre }} a été rejetée.</p>
</body>
</html>
