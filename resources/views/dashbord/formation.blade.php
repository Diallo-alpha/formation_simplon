

         @extends('layouts.base')
         @section('contenu')
        
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
                            <td>{{Str::limit( $formation->description ,100)}}</td>
                            <td>{{ $formation->date_expiration }}</td>
                             <td><a href="{{ route('form.modification.formation', $formation->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('formation.supprimer', $formation->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
        
                            </td>
                          <td>
                           <a href="{{route('candidatureFormation',$formation->id)}}">candidats</a>
                           </td>
                        </tr>
                    @endforeach
                    </tbody> 
                 </table> 
        
         @endsection
 







         