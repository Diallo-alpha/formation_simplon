
<style>
    table{
        margin-top: 36px;
        font-family: inter;
    }
   thead{
    background-color: #EFF0F4;
   }
   h1{
    text-align: center;
    margin-top: 80px;
    color: #ce0033;
    margin-top: 36px;
    font-family: inter;
   }
   section{
    margin-top: 100px;
   }
</style>
@extends('layouts.base2')
@section('contenu')
<main class="main-content">

        

            {{-- <section class="stats">
             
            </section> --}}
            <section class="table-section">
                <h1>Mes candidatures</h1>
                <table class="table table-no-borders">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>FORMATION</th>
                          
                            <th>DATE FIN</th>
                            <th>STATUT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidatures as $candidature)
                        <tr>
                            <td>{{ $candidature->id }}</td>
                            <td>{{ $candidature->formation->titre }}</td>
                            <td>{{ $candidature->formation->date_expiration }}</td>
                            <td>{{ $candidature->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    @endsection
