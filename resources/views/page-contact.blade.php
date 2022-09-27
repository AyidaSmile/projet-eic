@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid service-bar text-center text-white">
        <h1>Contactez-nous içi!</h1>
    </div>
    <div class="container py-5">
      <div class="row">

        <div class="col-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232769.31865867696!2d1.132912151167682!3d6.237458134169021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1021589032c597a7%3A0x7edb0cf6bb17cd06!2sPharmacie%20Mathilda!5e0!3m2!1sfr!2stg!4v1664141233182!5m2!1sfr!2stg" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-6 ml-4 border border-3">
          <div class="container">
            <div class="row">
              <p><h1 class="p-0">Contactez-nous</h1></p>
            </div>
            <div class="row">
              <p class="p-0">Une question, un problème,envie de nous envoyer un message ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous!</p>
            </div>
          </div>
          <form action="{{ route('contact.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control  @error('prenom') is-invalid @enderror" name="prenom" id="prenom" placeholder="Votre prenom" value="{{ old('prenom') }}">
                @error('prenom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-secondary">Envoyer</button>
        </form>
        </div>
      </div>
    </div>
  </section>
  @endsection
  <script>
    /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
     *et d'appliquer les styles de validation aux différents éléments de formulaire*/
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        let forms = document.getElementsByClassName('needs-validation');
        let validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
