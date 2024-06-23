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
        <div class="container">
            <img src="{{ asset('images/'.$formation->image)}}" alt="">
            <div>
                <h2>{{ $formation->titre }}</h2>
                <p>{{ Str::limit($formation->description, 200) }}</p>
                <p>Date limite: {{ $formation->date_expiration }}</p>
            </div>
            <div class="lien"> <a href=""> <button>postuler</button></a>
                <a href="" class="voir_plus"> <button>voir plus</button></a>
               </div> 
        </div>
        @endforeach
    {{-- </div> --}}
{{-- </main> --}}
@endsection
