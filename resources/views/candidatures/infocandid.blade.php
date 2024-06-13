<!-- <!DOCTYPE html>
<html>
<head>
    <title>Fichiers Téléversés</title>
</head>
<body>
    <h1>Fichiers Téléversés</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if($candidatures->isEmpty())
        <p>Aucun fichier téléversé pour le moment.</p>
    @else
        <ul>
            @foreach($candidatures as $candidature)
                <li>
                    <p>{{ $candidature->biographie}}</p>
                    <p>{{ $candidature->motivations}}</p>
                    <a href="{{ assert($candidature->cv) }}" target="_blank">
                        {{ basename($candidature->cv) }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidature - Jeanne Dupont</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .section-title {
            border-bottom: 2px solid #CE0033;
            margin-bottom: 20px;
            padding-bottom: 5px;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .skills li, .languages li {
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3 text-center">
                <img src="https://cdn.pixabay.com/photo/2018/01/03/19/54/fashion-3059143_1280.jpg" alt="Photo de Profil" class="profile-img">
                @foreach($users as $user)
                <p>{{$user->prenom}} {{$user->nom}}</p>
                <p>Chargée de Communication</p>
            </div>
            <div class="col-md-9">
                <div class="contact-info">
                    <p><strong>Email :</strong> <a href="mailto:jeanne.dupont@example.com"> {{$user->email}}</a></p>
                    <p><strong>Téléphone :</strong>  {{$user->telephone}}</p>
                    <p><strong>Adresse :</strong>  {{$user->adresse}}</p>
                </div>
                <h4 class="section-title">À propos de moi</h4>
                <p></p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
           
                <h4 class="section-title">Biographie</h4>
                <p>{{$candidature->biographie}}</p>
            </div>
            <div class="col-md-6">
                <h4 class="section-title">Motivations</h4>
                <p>{{$candidature->motivations}}</p>
            </div>
            <a href="{{ assert($candidature->cv) }}" target="_blank">
                        telechager cv
                    </a>
            @endforeach
        </div>

   
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>