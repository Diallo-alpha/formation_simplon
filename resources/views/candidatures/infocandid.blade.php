
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
              
                <p>{{$users->prenom}}</p>
                <p>Chargée de Communication</p>
            </div>
            <div class="col-md-9">
                <div class="contact-info">
                    <p><strong>Email :{{$users->email}}0</strong> <a href="mailto:jeanne.dupont@example.com"></a></p>
                    <p><strong>Téléphone :{{$users->telephone}}</strong>  </p>
                    <p><strong>Adresse :{{$users->adresse}}</strong>  </p>
                </div>
                <h4 class="section-title">À propos de moi</h4>
                <p></p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
           
                <h4 class="section-title">Biographie</h4>
                <p>{{$candidatures->biographie}}</p>
            </div>
            <div class="col-md-6">
                <h4 class="section-title">Motivations</h4>
                <p>{{$candidatures->motivations}}</p>
            </div>
          
        </div>

   
    </div>

    
</body>
</html>
