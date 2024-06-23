<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centered Card Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <body>
     <div class="banner">
      <div class="header">
      <div>
      <img src="{{asset('/images/' . $formation->image)}}">
      </div>
      <div>
        <h1 class="card-title">{{ $formation->titre}}:</h1>
      <h5 class="card-title">{{ $formation->description}}</h5>

      <div class="date1">
        <p>Date de début des inscriptions:<br>
        {{ $formation->created_at}}</p>
      </div>
      <div class="date2">
        <p>Date de limite des inscriptions:<br>
        {{ $formation->date_expiration}}</p>
      </div>
      <div></div>
      <button><a href="{{ url('formulaire_postuler',$formation->id)  }}">Postuler</a></button>
      </div>
      </div>

     </div>
    </body>
  
</html>
