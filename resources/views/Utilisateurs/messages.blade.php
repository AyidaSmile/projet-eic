@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-5" style="margin:20px;">
            <div class="card-header mt-5 text-white text-center" style="background-color: #268D72">
              <h1>Message relative à votre Reservation</h1>
            </div>
            <div class="card-body text-center" style="color: #268D72">
               <h3>
                Votre reservation a été bien reçu!
                Nous vous enverrons une reponse sur l'adresse mail
                que vous avez renseigné dans le formulaire d'inscription !!
               </h3>
            </div>
            <div class="text-center my-5">
                <a href="/home">
                    <button class="btn btn-danger btn-sm">Retour</button>
                </a>
            </div>
        </div>
    </div>
@endsection