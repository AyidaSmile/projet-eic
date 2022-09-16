@extends('clients.layout')

@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header">Page de nos employés</div>
    
        <div class="card-body">
            <h5 class="card-title">Nom: {{ $clients->nom_client }}</h5>
            <h5 class="card-title">Prenom: {{ $clients->prenom_client }}</h5>
            <p class="card-text">Age: {{ $clients->age_client }}</p>
            <p class="card-text">Sexe: {{ $clients->sexe_client }} </p>
            <p class="card-text">Numero: {{ $clients->numero_client }} </p>
            <p class="card-text">Adresse: {{ $clients->adresse_client}} </p>
        </div>
    </div>
</div>
@endsection