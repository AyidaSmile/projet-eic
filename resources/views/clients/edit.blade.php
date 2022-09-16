@extends('clients.layout')

@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header text-white" style="background-color: #268D72">Modifier mes informations</div>
    </div>
    <div class="card-body">
       <form action="{{ url('clients/' .$clients->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $clients->id }}" id="id" />
        <label>Nom</label><br>
        <input type="text" name="nom_client" id="nom" value="{{ $clients->nom_client }}" class="form-control"><br>
        <label>Prenom</label>
        <input type="text" name="prenom_client" id="prenom" value="{{ $clients->prenom_client }}" class="form-control"><br>
        <label>Age</label>
        <input type="text" name="age_client" id="prenom" value="{{ $clients->age_client }}" class="form-control"><br>
        <label>Sexe</label>
        <input type="text" name="sexe_client" id="prenom" value="{{ $clients->sexe_client }}" class="form-control"><br>
        <label>Numero</label>
        <input type="text" name="numero_client" id="prenom" value="{{ $clients->numero_client }}" class="form-control"><br>
        <label>Adresse</label>
        <input type="text" name="adresse_client" id="prenom" value="{{ $clients->adresse_client }}" class="form-control"><br>
        <input type="submit" class="btn btn-success"><br>
        
       </form>
    </div>

</div>
@endsection