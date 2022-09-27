@extends('layouts.app')
@section('content')
    <div class="container my-5 py-5">
        <div class="card"style="margin:20px;">
            <div class="card-header text-white text-center" style="background-color: #268D72">
              <h1>Message relative à votre message</h1>
            </div>
            <div class="card-body" style="color: #268D72">
               <h3>
                Votre message a été bien reçu!
                Nous vous enverrons une reponse sur l'adresse mail
                que vous avez renseigné dans le formulaire de contact!
               </h3>
            </div>
           <div class="text-center mb-5">
             <a href="/">
                <button class="btn btn-danger btn-sm">Retour</button>
            </a>
           </div>
        </div>
    </div>
@endsection
