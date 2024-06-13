<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #000000;
            padding-top: 50px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #a56e6e;
            border-color: #7e3d3d;
        }
    </style>
</head>
<body>

<div class="container">

<div><img src="" alt="" srcset=""></div>

<div>
    <div class="container mt-5">
        <h1>Inscription</h1>
        <form method="POST" action="{{ route('auth.postRegister') }}" class="row g-3">
            @csrf


            <!--Prenom & Nom-->
            <div class="col-md-12">
                <label for="name" class="form-label">name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <!-- Email Address -->
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="col-md-12">
                <label for="password" class="form-label">Mot de passe</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary mt-3">
                    Inscription
                </button>
                <p>Vous avez un compte ?</p> <a href=""></a>
            </div>
        </form>
    </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
