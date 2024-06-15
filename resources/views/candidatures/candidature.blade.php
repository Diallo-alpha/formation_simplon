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
        <h1 class="mt-5">Postuler</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('candidature.postuler') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <p>{{Auth::User()->prenom}}</p>
                <input type="hidden" name="user_id" class="form-control" value="{{Auth::User()->id}}">
                <input type="hidden" name="formation_id" class="form-control" value="{{$formation->id}}">
            <div class="form-group">
                <label for="cv">CV</label>
                <input type="file" name="cv" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="biographie">Biographie</label>
                <textarea name="biographie" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="motivations">Motivations</label>
                <textarea name="motivations" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
