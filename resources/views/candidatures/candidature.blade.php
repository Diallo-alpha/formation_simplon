<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{Route('postuler')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label  for="">Biographie</label><br>
        <textarea class="desc" type="text" name="biographie" id=""> </textarea><br>
        <label  for="">motivation</label><br>
        <textarea class="desc" type="text" name="motivations"></textarea><br>
        <label for="">cv</label><br>
        <input type="file" name="cv" class="form-control"><br>
        <div class="form-group">
            <label for="user_id">ID de l'utilisateur</label>
            <input type="number" class="form-control" id="user_id" name="user_id" required>
        </div>
        <div class="form-group">
            <label for="formation_id">ID de la formation</label>
            <input type="number" class="form-control" id="formation_id" name="formation_id" required>
        </div>
        <button type="submit" class="btn btn-danger">Postuler</button>
    </form>
    <style>
        form{
           margin-left: 30%;
          padding-top: 5%;
        }
        .desc{
            border: 1px solid #CE0033;
            align-items: center;
            right: 10%;
            width: 506px;
            height: 100px;
            margin: 10px;
            border-radius: 2px;
        }
        form{
            margin-top: 10px;
        }
        .form-control{
            width: 506px;
            border: 1px solid #CE0033;
            margin: 10px;
        }
        label{
            
        }
    </style>
</body>
</html>