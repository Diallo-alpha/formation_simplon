<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>simplon fomation</title>
</head>
<body>
    <menu>
        <div class="banner">
        <h1 class="cla">L'informatique pour tous,
        gratuitement.</h1>
        <p>Notre entreprise s'engage à offrir des formations informatiques gratuites pour rendre l'éducation numérique accessible à tous.</p>

        </div>
 <button>
    <a href="/deconnexion_candidat">deconnexion</a>
 </button>

    </menu>
    <style>
        .banner{
            background-image:url('{{ asset('images/banner.png') }}');
            background-repeat:no-repeat;
            background-size: cover;
            height: 70vh;
        }
    </style>
</body>
</html>
