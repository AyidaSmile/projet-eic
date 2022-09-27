{{-- @extends('employes.layout') --}}
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header text-white text-center" style="background-color: #268D72">
          <h1> Créer un nouveau Employé</h1>
        </div>
        <div class="mx-5">
          <a href="/employes">
            <button class="btn my-5  btn-danger btn-sm">Retour</button>
          </a>
        </div>
        <div class="card-body">
            <form action="{{ url('employes') }}" method="POST">
              {{-- pour la sécurité on met ici csrf_field --}}
                {!! csrf_field() !!}
                <label>Type_employe</label><br>
                <input type="text" name="type_employe" id="type_employe" class="form-control"><br>
                <label>Nom complet</label><br>
                <input type="text" name="nom" id="nom" class="form-control"><br>
                <label>Adresse</label><br>
                <input type="text" name="adresse" id="adresse" class="form-control"><br>
                <label>Email</label><br>
                <input type="email" name="email" id="email" class="form-control"><br>
                <label>Numero</label><br>
                <input type="number" name="mobile" id="mobile" class="form-control"><br>
                <input type="submit" value="Enregistrer" class="btn btn-success"><br>
            </form>
        </div>

    </div>
</div>
@endsection
