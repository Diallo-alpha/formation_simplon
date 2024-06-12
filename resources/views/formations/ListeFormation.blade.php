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
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date d'Expiration</th>
                    <th>Image</th>
                    <th>Utilisateur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Formation A</td>
                    <td>Description de la formation A</td>
                    <td>2023-12-31</td>
                    <td><img src="image_a.jpg" alt="Formation A" width="100"></td>
                    <td>Utilisateur 1</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Modifier</a>
                        <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Formation B</td>
                    <td>Description de la formation B</td>
                    <td>2024-06-30</td>
                    <td><img src="image_b.jpg" alt="Formation B" width="100"></td>
                    <td>Utilisateur 2</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Modifier</a>
                        <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
