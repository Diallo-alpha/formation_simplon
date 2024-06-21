@extends('layout.base')
@section('dashboard')
{{-- <main class="main-content"> --}}
{{-- <div class="conteneur_element"> --}}
    {{-- <div class="conteneur_element"> --}}

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @foreach($formations as $formation)
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('images/'.$formation->image)}}" alt="Formation Image" onerror="this.onerror=null;this.src='{{ asset('images/default.jpg') }}';">
            </div>
            <div class="card-content">
                <h2>{{ $formation->titre }}</h2>
                <p>{{ Str::limit($formation->description, 100) }}</p>
                <div class="date">Date limite: {{ $formation->date_expiration }}</div>
                <a href="{{ url('formulaire_postuler',$formation->id)  }}"><button class="btn btn-danger text-white btn-adjusted">Postuler</button></a> <br> <br>
                <a href="{{route('detail.formation', $formation->id)}}" style="text-decoration: none"> <button class="btn btn-danger text-white btn-adjusted">Voir plus</button>
            </div>
        </div>
        @endforeach
    {{-- </div> --}}
{{-- </main> --}}
@endsection
