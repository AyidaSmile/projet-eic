
@extends('layouts.app')

@section('content')
<div class="container  py-5 my-5">
    <div class="card " style="margin:20px;">
        <div class="card-header text-white text-center" style="background-color: #268D72">
          <h1> Formulaire de reservation</h1>
        </div>
        <div class="text-center mt-5">
          <a href="/home">
            <button class="btn btn-danger btn-sm">Retour</button>
        </a>
        </div>
        <div class="card-body">

            <form action="{{ url('Utilisateurs.reservation.store') }}" method="POST">
              {{-- pour la sécurité on met ici csrf_field --}}
              @csrf
            <label>Qui êtes-vous??</label><br>
            <div class="form-select-wrapper long ">
                <select name="type_client" class=" form-control long">
                    <option value="Particulier"></option>
                    <option value="Particulier">Particulier</option>
                    <option value="Entreprise">Entreprise</option>
                    <option value="Administration">Administration</option>
                    <option value="Administration">Boutique</option>
                    <option value="Administration">Magazin</option>
                    <option value="Administration">Autre à préciser dans le champ détails</option>
                </select>
            </div> <br>

                <label>Nom de l'entreprise ou autre. </label><br>
                <input type="text" name="nom_structure" id="nom" placeholder="Saisissez aucune si vous reserver en tant que particulier, sinon précisez le nom de la structure" class="form-control "><br>
                <label>Adresse</label><br>
                <input type="text" name="adresse" id="adresse" placeholder="Saisir l'adresse" class="form-control"><br>
                <label>Ville</label><br>
                <input type="text" name="ville" id="email" class="form-control"><br>
                <label>Type de service</label><br>
                 <div class="form-select-wrapper long ">
                    <select name="type_service" class=" form-control long">
                        <option value="Nettoyage"></option>
                        <option value="Nettoyage">Nettoyage de bureaux ou locaux</option>
                        <option value="Nettoyage">Nettoyage d'immeubles</option>
                        <option value="Nettoyage">Nettoyage de commerces ou boutiques</option>
                        <option value="Nettoyage">Nettoyage d'entrepôts</option>
                        <option value="Nettoyage">Nettoyage de vitres</option>
                        <option value="Ménage">Ménage à domicile</option>
                        <option value="Ménage">Repassage à domicile</option>
                        <option value="Ménage">Besoin d'une domestique</option>
                        <option value="Ménage">Lessive à domicile</option>
                        <option value="Ménage">Autre à préciser dans le champ détails</option>
                    </select>
                 </div> <br>
                 <label>Date</label><br>
                <input type="date" name="date" id="date" placeholder="Saisir la date pour la prestation" class="form-control"><br>
                <label>Heure</label><br>
                <input type="time" name="heure" id="heure" placeholder="Saisir l'heure pour la prestation" class="form-control"><br>
                <label>Détails</label><br>
                <textarea class="form-control" name="details" id="details" placeholder="Précisez vos préférences au cas ou vous voulez plusieurs prestations ou une prestation spécifique."></textarea>
                <div>
                    <input type="submit" value="Enregistrer" class="btn btn-success my-5"><br>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
