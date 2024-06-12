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

        <label for="">Biographie</label>
        <input type="text" name="biographie" id=""><br>
        <label for="">motivation</label>
        <input type="text" name="motivations"><br>
        <label for="">cv</label>
        <input type="file" name="cv" class="form-control"><br>
        <input type="number" name="user_id" id="">
        <button class="btn btn-primary" type="submit">envoyer</button>
    </form>
</body>
</html>