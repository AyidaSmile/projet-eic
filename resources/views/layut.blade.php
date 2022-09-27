

@extends('layouts.app')
@section('content')
<div class="container-fliud a-propos my-5 fs-2">
    <div class="container text-white fw-bold my-5" data-aos="fade-up" >
        <div class="row my-5">
          <div class="col-md-12 w-100 mt-5  fw-bold">
            <p class="ecrit text-about image-size mt-5">

L’entreprise everything is clean  est une entreprise offrant des
services de nettoyage et de ménage de qualité , ainsi que des formations et recrutements.
            </p>
          </div>
        </div>
        <button class=" bg-white btn btn-sm boutton-accroche my-5 fs-3 "><a class="bouton-accroche text-success " href="{{ route('register') }}">Reserver un service</a></button>
      </div>
</div>
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="../assets/images/mad.jpg" alt="" class="w-100" srcset="">
            </div>
        <div class="col-md-6 align-items-center">
        <p>
            Dans les logements de particuliers et les locaux d’entreprise, l’ordre, la propreté et l’hygiène sont d’une importance capitale.
             Plus que d’assurer la bonne présentation d’un lieu, le nettoyage et le ménage favorisent
             la bonne santé de ses occupants. Tout le monde est conscient de cette vérité. Toutefois, avec les
             aléas du quotidien, il est souvent impossible de s’occuper de toutes les pièces de manière optimale...
            Heureusement qu’il existe une solution simple à l’exécution du nettoyage
            pour les entreprises et du nettoyage de maison : faire appel à une équipe
             spécialisée dans le domaine. Cette équipe peut être Everything Is Clean.
        </p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6 align-items-center">
            <p>
                Les avantages à déléguer le nettoyage de son local professionnel

                Le premier avantage le plus évident à nous confier l’entretien de votre entreprise ou votre nettoyage
                 de commerces, c’est le fait de pouvoir vous concentrer pleinement sur votre cœur de métier.
                L’équipe Everything Is Clean remplit ainsi ses missions avec sérieux et rigueur. En effet, pour agir avec
                le plus d’efficacité possible, elle établit une liste des tâches à accomplir pour savoir lesquelles
                 réaliser en priorité. Cela surtout pour ne pas déranger les collaborateurs pendant les heures de travail.
            </p>
            </div>
        <div class="col-md-6">
            <img src="../assets/images/formation.jpg" alt="" class="w-100" srcset="">
        </div>
    </div>
    </div>
@endsection
