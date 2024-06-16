<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Candidatures</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Liste des Candidatures</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Utilisateur</th>
                    <th>CV</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidatures as $candidature)
                    <tr>
                        <td>{{ $candidature->id }}</td>
                        <td>{{ $candidature->user->nom }}</td>
                        <td>
                      @if ($candidature->cv_path)
    <a href="{{ asset('storage/' . $candidature->cv) }}" target="_blank">Télécharger</a>
@else
    Aucun fichier
@endif


                        </td>
                        <td>{{ ucfirst($candidature->status) }}</td>
                        <td>
                            @if ($candidature->status == 'En attente')
                                <a href="{{ route('candidature.accepter', $candidature->id) }}" class="btn btn-success">Accepter</a>
                                <a href="{{ route('candidature.rejeter', $candidature->id) }}" class="btn btn-danger">Rejeter</a>
                            @else
                                <span>{{ ucfirst($candidature->status) }}</span>
                            @endif
                            <form action="{{ route('candidatures.destroy', $candidature->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
