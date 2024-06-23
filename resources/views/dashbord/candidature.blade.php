@extends('layouts.base')
@section('contenu')
<style>
    #tableauformation{
        background-color: white;
    width: 150%;
    border-radius: 30px 0px 0px 30px ;
    }
    #tableauformation a{
      color: black;
    }
</style>

</div>
<!-- le conteneur des elements -->
<div class="conteneur_element">



<div>
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
<table class="dataTable">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>niveau</th>
            <th>adresse</th>
            <th>date</th>
            <th>cv</th>
            <th>statut</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($candidatures as $candidature)

        <tr>
            <td><a href="{{Route('detail.candidature',$candidature->id)}}">{{$candidature->user->nom}}</td>
            <td>{{$candidature->user->prenom}}</td>
            <td>{{$candidature->user->niveau}}</td>
            <td>{{$candidature->user->adresse}}</td>
            <td>{{$candidature->created_at}}</td>
            <td>


                                <a href="{{ route('fichier.cv', ['path' => str_replace('public/', '', $candidature->cv_path)]) }}" target="_blank">Télécharger</a>

                        </td>
                        <td>{{ ucfirst($candidature->status) }}</td>
                        <td>
                            @if ($candidature->status == 'En attente')
                                <a href="{{ route('candidature.accepter', $candidature->id) }}" class="btn1">Accepter</a>
                                <a href="{{ route('candidature.rejeter', $candidature->id) }}" class="btn2">Rejeter</a>
                            @else
                                <span>{{ ucfirst($candidature->status) }}</span>
                            @endif
                            <form action="{{ route('candidatures.destroy', $candidature->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn3">Supprimer</button>
                            </form>
                        </td>
            @endforeach
    </tbody>
</table>

</div>
</div>
</div>
<style>
    .btn1{
        background-color: green;
        color: white;
        padding: 20px;
        border-radius: 5px;
    }
    .btn2{
        background-color:#CE0033;
        color: white;
        padding: 20px;
        border-radius: 5px;
    }
    .btn3{
        background-color:#CE0033;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }

.conteneur_element{
    padding: 1rem;
}
   
.dataTable {
    display: block;
    width: 100%;
    margin: 1em 0;
  }
  
  .dataTable thead, .dataTable tbody, .dataTable thead tr, .dataTable th {
    display: block;
  }
  
  .dataTable thead {
    float: left;
  }
  
  .dataTable tbody {
    width: auto;
    position: relative;
    overflow-x: auto;
  }
  
  .dataTable td, .dataTable th {
    padding: .625em;
    line-height: 1.5em;
    border-bottom: 1px dashed #ccc;
    box-sizing: border-box;
    overflow-x: hidden;
    overflow-y: auto;
  }
  
  .dataTable th {
    text-align: left;
    background: rgba(0, 0, 0, 0.14);
    border-bottom: 1px dashed #aaa;
  }
  
  .dataTable tbody tr {
    display: table-cell;
  }
  
  .dataTable tbody td {
    display: block;
  }
  
  .dataTable tr:nth-child(odd) {
      background: rgba(0, 0, 0, 0.07);
  }
  
  @media screen and (min-width: 50em) {
  
    .dataTable {
      display: table;
    }
    
    .dataTable thead {
      display: table-header-group;
      float: none;
    }
    
    .dataTable tbody {
      display: table-row-group;
    }
    
    .dataTable thead tr, .dataTable tbody tr {
      display: table-row;
    }
    
    .dataTable th, .dataTable tbody td {
      display: table-cell;
    }
    
    .dataTable td, .dataTable th {
      width: auto;
    }
    
  }
</style>
@endsection
