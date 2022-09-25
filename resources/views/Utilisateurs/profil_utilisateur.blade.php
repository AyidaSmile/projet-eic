@extends('layouts.user')

@section('content')
<div class="container text-center">
    <div class="card w-50 text-center" style="margin:20px;">
        <h1 class="card-header text-dark">Mon profil</h1>

        <div class="card-body text-dark">
            <h5 class="card-title">Nom:  {{ Auth::user()->name }}</h5>
            <h5 class="card-title">Prenom:  {{ Auth::user()->surname }}</h5>
            <p class="card-text">Phone:  {{ Auth::user()->phone }}</p>
            <p class="card-text">Sexe:  {{ Auth::user()->sexe }}</p>
            <p class="card-text">Email:  {{ Auth::user()->email }}</p>
        </div>
        <div class="text-center py-5">
            <a href="/home">
                <button class="btn btn-primaryr btn-sm">Retour</button>
            </a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
