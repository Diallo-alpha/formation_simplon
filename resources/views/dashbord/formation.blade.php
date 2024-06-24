<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    #tableauformation{
        background-color: white;
    width: 150%;
    border-radius: 30px 0px 0px 30px ;
    }
    #tableauformation a{
      color: black;
    }
    .d-inline-block a{
        display: flex;
        border-radius: 50px;
        font-family: inter;
        font-weight: 700
    }
    .d-inline-block button{
        display: flex;
        border-radius: 50px;
        font-family: inter;
        font-weight: 700
    }
    table{
        margin-top: 30px;
    }
    .ajouter{
        font-family: inter;
        font-weight: 700;
        margin-top: 140px
    }
</style>

         @extends('layouts.base')
         @section('contenu')
         <div class="ajouter">     
                <a href="{{ route('formulaire.ajout.formation') }}" class="btn btn-primary ">Ajouter formation</a>
         </div>

   
                <table class="table table-striped"><a href="#"></a>
                    <thead class="thead-dark">
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Date d'Expiration</th>
                             {{-- <th>Utilisateur</th> --}}
                            <th>Actions</th>
                            <th>Candidats</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($formations as $formation)
                        <tr>
                            <td>{{ $formation->titre }}</td>
                            <td>{{Str::limit( $formation->description ,50)}}</td>
                            <td>{{ $formation->date_expiration }}</td>
                            
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('form.modification.formation', $formation->id) }}" class="btn btn-primary">Modifier</a>
                                </div>
                                <div class="d-inline-block">
                                    <form action="{{ route('formation.supprimer', $formation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                          <td>
                           <a href="{{route('candidatureFormation',$formation->id)}}">candidats</a>
                           </td>
                        </tr>
                    @endforeach
                    </tbody> 
                 </table> 
        
         @endsection
 
</body>
</html>






         