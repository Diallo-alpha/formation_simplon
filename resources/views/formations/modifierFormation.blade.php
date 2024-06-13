<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Formation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('miseAjourTraitement', $formation->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" class="form-control" value="{{ $formation->titre }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" required>{{ $formation->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="date_expiration">Date d'expiration</label>
        <input type="date" name="date_expiration" class="form-control" value="{{ $formation->date_expiration }}" required>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        @if ($formation->image)
            <div class="mt-2">
                <img src="{{ asset('images/' . $formation->image) }}" alt="{{ $formation->titre }}" width="100">
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
