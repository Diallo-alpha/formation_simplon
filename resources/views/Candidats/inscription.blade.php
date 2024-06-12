<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire Stylisé</title>
    <link rel="stylesheet" href="{{ asset('css/candidat.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="form-container container">
        <div class="image-container">
            <img src="https://i.pinimg.com/564x/3b/4c/41/3b4c41b14d5de925305457608a728d51.jpg" alt="Illustration" class="illustrative-image">
        </div>
        <div class="form-wrapper">
            <h1 class="text-center">Hello, world!</h1>
            @if(session ('status'))
    <div class="alert alert-success">
        {{ session ('status') }}
    </div>
    @endif
            <form method="POST" action="sauvegarde_candidat">
                @csrf
                {{-- input pour prenom --}}
                <div class="mb-3">
                    <label for="prenom" class="form-label">Donner votre prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                {{-- input pour nom --}}
                <div class="mb-3">
                    <label for="nom" class="form-label">Donner votre nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                {{-- input pour telephone --}}
                <div class="mb-3">
                    <label for="telephone" class="form-label">Donner votre telephone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
                {{-- input pour adresse --}}
                <div class="mb-3">
                    <label for="adresse" class="form-label">Donner votre adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                {{-- input pour niveau --}}
                <div class="mb-3">
                    <label for="niveau" class="form-label">Donner votre niveau</label>
                    <input type="text" class="form-control" id="niveau" name="niveau">
                </div>
                {{-- input pour email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Donner votre email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                {{-- input pour password --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Donner votre mot de pass</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
