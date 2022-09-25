{{-- @extends('employes.layout') --}}
@extends('layouts.master')

@section('content')
<div class="container text-center">
    <div class="card text-center w-50" style="margin:20px;">
        <div class="card-header text-white text-center" style="background-color: #268D72"><h3>Page de nos employés</h3></div>
        <div class="card-body text-dark">
            <h5 class="card-title">Type d'employé: {{ $employes->type_employe }}</h5>
            <h5 class="card-title">Nom complet: {{ $employes->nom }}</h5>
            <p class="card-text">Adresse: {{ $employes->adresse }}</p>
            <p class="card-text">Email: {{ $employes->email }} </p>
            <p class="card-text">Numero: {{ $employes->mobile}} </p>
        </div>
        <a href="/dashboardAdmin">
            <button type="button" class="btn text-white my-5 ms-5" style="background-color: #268D72">Retour</button>
        </a>
    </div>
</div>
@endsection
