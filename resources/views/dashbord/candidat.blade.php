<style>
        #tableaucandidat{
        background-color: white;
    width: 150%;
    border-radius: 30px 0px 0px 30px ;
    }
    #tableaucandidat a{
      color: black;
    }
</style>

  

@extends('layouts.base')
@section('contenu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">email</th>
        <th scope="col">telephone</th>
        <th scope="col">Adresse</th>
        <th scope="col">niveau</th>
        {{-- <th scope="col">Supprimer</th> --}}
      </tr>
    </thead>
    @foreach ($users as $user )
    <tbody>
      <tr>
  
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->prenom }}</td>
        <td>{{ $user->nom }}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->telephone}}</td>
        <td>{{ $user->adresse}}</td>
        <td>{{ $user->niveau}}</td>
        @endforeach
      </tr>
    </tbody>
    @endsection

