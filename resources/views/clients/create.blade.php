@extends('clients.layout')

@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header text-white" style="background-color: #268D72">
            Créer un nouveau Employé
        </div>
        <div class="card-body">
            <form action="{{ url('clients') }}" method="POST">
                {!! csrf_field() !!}
                <label>Nom</label><br>
                <input type="text" name="nom_client" id="nom" class="form-control"><br>
                <label>Prenom</label><br>
                <input type="text" name="prenom_client" id="prenom" class="form-control"><br>
                <label>Age</label><br>
                <input type="text" name="age_client" id="age" class="form-control"><br>
                <label>Sexe</label><br>
                <input type="text" name="sexe_client" id="sexe" class="form-control"><br>
                <label>Numero</label><br>
                <input type="text" name="numero_client" id="numero" class="form-control"><br>
                <label>Adresse</label><br>
                <input type="text" name="adresse_client" id="adresse" class="form-control"><br>
                <input type="submit" value="Enregistrer" class="btn btn-success"><br>
            </form>
        </div>
    </div>
</div>
@endsection