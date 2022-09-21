@extends('employes.layout')

@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header text-white text-center" style="background-color: #268D72"><h1>Modifier les informations</h1></div>
        
        <div class="card-body">
        <form action="{{ url('employes/' .$employes->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $employes->id }}" id="id" />
            <label>Type d'employé</label><br>
            <input type="text" name="type_employe" id="type_employe" value="{{ $employes->type_employe }}" class="form-control"><br>
            <label>Nom complet</label>
            <input type="text" name="nom" id="nom" value="{{ $employes->nom }}" class="form-control"><br>
            <label>Adresse</label>
            <input type="text" name="adresse" id="adresse" value="{{ $employes->adresse }}" class="form-control"><br>
            <label>Email</label>
            <input type="text" name="email" id="email" value="{{ $employes->email }}" class="form-control"><br>
            <label>Numero</label>
            <input type="text" name="mobile" id="mobile" value="{{ $employes->mobile }}" class="form-control"><br>
            <input type="submit" value="Mise à jour" class="btn btn-success"><br>
        </form>
        </div>
    </div>
</div>
@endsection