<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Formations</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Formations</h1>
        <a href="{{ route('formulaire.ajout.formation') }}" class="btn btn-success mb-3">Ajouter une Formation</a>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date d'Expiration</th>
                    <th>Image</th>
                    <th>Utilisateur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->titre }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>{{ $formation->date_expiration }}</td>
                    <td><img src="{{asset('/images/' . $formation->image)}}" alt="{{ $formation->titre }}" width="100"></td>
                    <td>
                        <a href="{{ route('form.modification.formation', $formation->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('formation.supprimer', $formation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
