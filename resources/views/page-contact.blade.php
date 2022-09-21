@extends('layouts.app')
@section('content')
<section>
    <div class="container-fluid service-bar text-center text-white">
        <h1>Contactez-nous içi!</h1>
    </div>
    <div class="container py-5">
      <div class="row">

        <div class="col-6">
          <img src="../assets/images/nous.jpg" alt="" class="w-100" srcset="">
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