<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/candidat.css') }}">

    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">email</th>
            <th scope="col">telephone</th>
            <th scope="col">Adresse</th>
            <th scope="col">niveau</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        @foreach ($users as $user )
        <tbody>
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->telephone}}</td>
            <td>{{ $user->adresse}}</td>
            <td>{{ $user->niveau}}</td>
            <td><a href="supprimer_candidat/{{ $user->id }}" class="btn btn-danger"> supprimer</a></td>
            <i class='fas fa-eye' style='font-size:48px;color:red'></i>
            @endforeach
          </tr>
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
