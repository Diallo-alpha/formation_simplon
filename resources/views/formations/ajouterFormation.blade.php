@extends('layouts.base')
@section('contenu')


   
    <div class="tete-side2"> <h1> Ajuter une formation</h1>
        <br>
        <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('formations.traitement') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <br>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="description">Description</label>
                        <br>
                        <textarea class="form-control" id="description" name="description" rows="10" required></textarea>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="date_expiration">Date d'Expiration</label>
                        <br>
                        <input type="date" class="form-control" id="date_expiration" name="date_expiration" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="image">Image</label>
                        <br>
                        <input type="file" class="form-control" id="image" name="image" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="users_id"></label>
                        <br>
                        <input type="hidden" class="form-control" id="users_id" name="users_id">
                        <br>
                    </div>
                    <button id="ajout" type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
   
<style>
    /* Styles pour le conteneur du formulaire */
.tete-side2{
    text-align: start;
   
}
#tableaubord{
    background-color: white;
    width: 150%;
    border-radius: 30px 0px 0px 30px ;
  
   margin-top: 10%;
   }
   #tableaubord a{
    color: black;
   }
.ajout{
    
}
.form-container {
    
    width: 100%;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Styles pour les groupes de formulaires */
.form-group {
    margin-bottom: 30px;
    margin: auto;
    width: 100vh;
}

/* Styles pour les labels */
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #ce0033;
}

/* Styles pour les champs de formulaire */
.form-control {
    width: 100%;
    padding: 10px;
    font-size: 1em;
    color: #333;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Styles pour les champs de formulaire en focus */
.form-control:focus {
    border-color: #ce0033;
    box-shadow: 0 0 5px rgba(206, 0, 51, 0.5);
}

/* Styles pour le bouton de soumission */
.btn-primary {
    display: block;
    width: 100%;
    padding: 12px;
    font-size: 1.2em;
    color: #fff;
    background-color: #ce0033;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 15px;
}

/* Styles pour le bouton de soumission en hover */
.btn-primary:hover {
    background-color: #a60029;
}

/* Styles pour les messages d'erreur */
.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border-color: #f5c6cb;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 20px;
}

/* Styles pour la liste des erreurs */
.alert-danger ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
icon{
    color: #ce0333;
}
.sidebar {
    width: 250px;
    background-color: #C50026;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    height: 97vh;
}

.profile {
    text-align: center;
    margin-bottom: 20px;
}

.profile img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
}

nav ul {
    margin-top: 30px;
    list-style-type: none;
    padding: 0;
}

nav ul li {
    margin: 20px 0;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.dashboard {
    flex: 1;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: #f8f9fa;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: fixed;
}

header h1 {
    margin-top: 20px;
}

.user-info p {
    margin: 0;
}

.stats {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
}

.stat-item {
    background-color: #e7e7e7;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    flex: 1;
    margin: 0 10px;
}

.stat-item p {
    margin: 5px 0;
}

.table-section {
    margin-top: 20px;
}

.table-section h2 {
    margin-top: 7.5rem;
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.colonne {
    text-align: start;
    color: white;
    width: 100%;
    font-size: 1.2rem;
    font-weight: 400;
    padding: 0.80rem;
    padding-left: 2rem;
}

th, td {
    padding: 10px;
    text-align: left;
}

thead {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
/*page profil canndidat*/
.profile-card img {
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 20px;
}

.profile-card .profile-details {
    flex-grow: 1;
}

.profile-card .profile-buttons {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.profile-card button {
    margin: 5px 0;
    padding: 10px 20px;
    background-color: #C50026;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.profile-info {
    display: flex;
    flex-direction: column;
}

.profile-info h3 {
    margin-bottom: 10px;
}

.profile-info .form-group {
    display: flex;
    justify-content: space-between;
}

.profile-info label {
    margin-top: 10px;
    flex-basis: 48%;
}

.profile-info input, .profile-info textarea {
    margin-top: 5px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    flex-basis: 48%;
}

.profile-info textarea {
    flex-basis: 100%;
}

.profile-info input[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #C50026;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

</style>
@endsection