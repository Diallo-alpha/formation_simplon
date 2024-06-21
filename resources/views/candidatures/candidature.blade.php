<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <p>Bienvenue et merci de l'intérêt que vous portez à notre entreprise ! 
        Nous sommes ravis que vous <br> envisagiez de rejoindre notre équipe. Afin de mieux connaître votre parcours et vos compétences,<br> nous vous invitons à remplir ce formulaire de candidature avec soin.</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Auth::check())
            <form action="{{ route('postuler') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                   
                    <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="formation_id" class="form-control" value="{{ $formations->id }}">
                </div>

              

                <div class="form-group">
                    <label for="biographie">Biographie:</label>
                    <textarea name="biographie" class="form-control" required rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="motivations">Motivations:</label>
                    <textarea name="motivations" class="form-control" required rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="cv">CV (Curriculum Vitae):</label>
                    <input type="file" name="cv" class="form-control-file" required>
                </div>
                <button type="submit" class="btn">Soumettre</button>
            </form>
        @else
            <p>Vous devez être connecté pour postuler. <a href="{{ route('auth.postLogin') }}">Connexion</a></p>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
       .form-control{
            width: 70%;
            border: 1px solid #CE0033;
          
          
        }
        form{
            align-items: center;
            margin-left: 30%;
            margin-top: 3%;
        }
        .btn{
            background-color: #CE0033;
            color: white;
        }
        p{
            text-align: center;
            color:#CE0033;
            font-size: 18px;
            font-weight: bold;
            margin-top: 5%;
        }
        label{
            font-weight: bold;
            font-size: 20px;
        }

    </style>
</body>
</html>
