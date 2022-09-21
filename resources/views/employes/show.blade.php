@extends('employes.layout')

@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header text-white text-center" style="background-color: #268D72"><h1>Page de nos employés</h1></div>
    
        <div class="card-body">
            <h5 class="card-title">Type d'employé: {{ $employes->type_employe }}</h5>
            <h5 class="card-title">Nom complet: {{ $employes->nom }}</h5>
            <p class="card-text">Adresse: {{ $employes->adresse }}</p>
            <p class="card-text">Email: {{ $employes->email }} </p>
            <p class="card-text">Numero: {{ $employes->mobile}} </p>
        </div>
    </div>
</div>
@endsection