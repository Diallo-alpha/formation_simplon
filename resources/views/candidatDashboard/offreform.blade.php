<style>
     .container{
            display:flex;
            width: 1190px;
            height: 260px;
            margin-left: 40px;
            border: #Ce0033;
            border: 1px solid white;
            margin-top: 30px;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
            border-radius: 12px
            
           
        }
        h1{
            text-align: center;
            color: #Ce0033;
            font-family: Montserrat;
        }
        .container img{
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin-top:25px 
        }
        .container h2{
            color: #Ce0033;
            text-align: center;
            font-family: Montserrat;
        }
        .container p{
            margin-left: 30px;
            font-size: 22px;
            text-align: justify;
            font-family: Montserrat;
        }
        .container button{
            margin-top: 200px
        }
        .container .lien{
            display: flex;
            margin-right: 20px;
          
            
            
            
        }
        .lien button{
            width: 109px;
            height: 44px;
            border-radius: 7px;
            border: 1px solid #Ce0033 ;
            background:#Ce0033 ; 
            color: rgb(255, 255, 255);
            font-family: Inter;
            position: relative;
            margin-top: 170px;
          

         

            
        }
        .voir_plus{
            margin-left: 20px;
        } 

        #tableauformation{
            background-color: white;
    width: 150%;
    border-radius: 30px 0px 0px 30px ;
        } 
        #tableauformation a{
          color: black;
        } 




</style>
@extends('layouts.base2')
@section('contenu')


@foreach($formations as $formation)
<div class="container">
    <img src="{{ asset('images/'.$formation->image)}}" alt="">
    <div>
        <h2>{{ $formation->titre }}</h2>
        <p>{{ Str::limit($formation->description, 200) }}</p>
                <p>Date limite: {{ $formation->date_expiration }}</p>
    </div>
    <div class="lien">
         <a href="postuler"> <button>postuler</button></a>
        <a href="detail/{{ $formation->id }}" class="voir_plus"> <button>voir plus</button></a>
    </div> 
</div>
@endforeach 
@endsection
