@extends('layout.base')
@section('dashboard')
<main class="main-content">

            <header>
            <div class="container">

        @if (session('message'))
            <div class="alert alert-success">

                <h1 lass="alert alert-success"> {{ session('message') }}</h1>
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

            <section class="stats">
                <h1>Mes candidatures</h1>
            </section>
            <section class="table-section">
                <h2>Formation</h2>
                <table>
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>FORMATION</th>
                            {{-- <th>DATE DEBUT</th> --}}
                            <th>DATE FIN</th>
                            <th>STATUT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidatures as $candidature)
                        <tr>
                            <td>{{ $candidature->id }}</td>
                            <td>{{ $candidature->formation->titre }}</td>
                            {{-- <td>{{ $candidature->formation->date_debut}}</td> --}}
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
