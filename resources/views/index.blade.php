

   @extends('layouts.app')
   {{-- LAYOUT APP POUR dire qu'il n'a qu'à hériter des choses du layout app et ici c'est le header et le footer que j'ai mis dans app- à l'intérieure de qui j'ai mis un @yield('content')
  pour dire que c'est ici que se trouvera le contenu de tout ce qui hériterons de moi}}
   {{-- ici le section content encadre le contenu de la vue pour qu'il puisse être pris par le layout => à chaque fois qu'une chose hérite du layout il doit être entouré par les sections--}}
   @section('content')
   <main>
    {{-- ici notre image d'acceuil et le text d'accroche de la page d'acceuil eic--}}
    <section class="d-flex align-items-center  image">
      <div class="container text-white fw-bold" data-aos="fade-up" >
        <div class="row my-5">
          <div class="col-md-12 w-50 mt-5">
            <h1 class="ecrit text-left image-size mt-5">Everything is clean, tout est propre en un clic.</h1>
            <h3 class="ecrit text-left image-size">le prestataire, dont vous avez besoin pour une maison propre ou un environnement de travail agréable !</h3>
          </div>
        </div>
        <button class=" bg-white btn btn-sm boutton-accroche my-5 fs-3 "><a class="bouton-accroche text-success " href="{{ route('register') }}">Reserver un service</a></button>
      </div>
    </section>
    {{-- ici la partie service de la page d'acceuil eic --}}
    {{-- <section>
      <div class="container-fluid service-bar ">

      </div>
      <div class="container-fluid text-center mt-5 ">
            <h1 class="fw-bold " style="color: #268D72">NOS SERVICES</h1>
            <h2 class="text-muted">En un seul clic faites la demande de nos services ou que vous soyez et ou que vous voulez</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 ">
            <div class="card shadow-sm">
              <img src="../assets/images/nettoyage.webp" alt="" class="w-100">
              <div class="card-body">
                <h1 class="card-title text-center fs-2">Eco Entretien(Pour l'entretien)</h1>.
                <p class="card-text text-center fw-normal">
                  Pour assurer au quotidien l'image de vos services et locaux nous mettons à votre disposition des agents compétents. Faites nous confiance!!!!
                </p>
                <div class="text-center">
                    <a href="/services">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                    </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="card shadow-sm">
              <img src="../assets/images/menage.webp" alt="" class="w-100">
              <div class="card-body">
                <h1 class="card-title text-center fs-2">Eco Exclusif(Service à domicile)</h1>.
                <p class="card-text text-center fw-normal">
                  Nous mettons à votre disposition des femmes de ménage  professionnelle pour vous  rendre la vie plus légère et brillante
                </p>
                <div class="text-center">
                    <a href="/services">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                    </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img src="../assets/images/formation.jpg" alt="" class="w-100">
              <div class="card-body">
                <h1 class="card-title text-center fs-2">Recrutement et Formation des agents</h1>.
                <p class="card-text text-center fw-normal">
                  Nous offrons une formation de qualité en hygiène et assainissement à nos participants et nous recrutons des agents d'entretiens et des domestiques
                </p>
                <div class="text-center">
                    <a href="/services">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- ici la partie à propos de la page d'acceuil eic --}}
    <section>
        <div class="container-fluid service-bar ">

        </div>
        <div class="container-fluid nos-services text-center mt-5 ">
            <h1 class="fw-bold titre" style="color: #268D72">Nos services</h1>
            <h5 class="text-muted  mb-5">En un seul clic faites la demande de nos services ou que vous soyez et ou que vous voulez</h5>
      </div>
     <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="../assets/images/nettoyage.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Eco Entretien(Pour l'entretien)</h5>
                  <p class="card-text">Pour assurer au quotidien l'image de vos services et locaux nous mettons à votre disposition des agents compétents. Faites nous confiance!                </p>
                </div>
                <div class="card-footer text-center">
                    <a href="/services">
                        <buton type="button" class="text-white bg-success  btn btn-sm btn-outline-secondary">En savoir plus</buton>
                    </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../assets/images/menage.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Eco Exclusif(Service à domicile)</h5>
                  <p class="card-text">Nous mettons à votre disposition des femmes de ménage  professionnelle pour vous  rendre la vie plus légère et brillante
                </p>
                </div>
                <div class="card-footer text-center">
                    <a href="/services">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                    </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../assets/images/formation.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Recrutement et Formation des agents</h5>
                  <p class="card-text">Nous offrons une formation de qualité en hygiène et assainissement à nos participants et nous recrutons des agents d'entretiens et des domestiques
                </p>
                </div>
                <div class="card-footer text-center">
                    <a href="/services">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                    </a>
                </div>
              </div>
            </div>
          </div>
     </div>
    </section>
    <section>
      <div class="container-fluid service-bar mt-5">

      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 align-items-center">
            <h1 style="color: #268D72" class="text-center">Qui sommes-nous ?</h1>
            <div class=" fw-normal mb-5 text-center fs-4">La société EIC est une société multifonctionnelle spécialisée dans le service de  bio nettioyage, le recrutement, et la formation .</div>
            <p class="fw-light fs-3 text-center">Nous offrons des services de bio nettoyages des surfaces des locaux, nous recrutons et formons des techniciens d'entretiens de surfaces de locaux pour les
              entreprises et domiciles. placement des femmes de ménages et garçon de chambre. Nos services sont offert suivant le créneau horaire de nos clients .</p>
              <div class="text-center ">
              <a href="#"><buton type="button" class="text-white bg-success btn btn-sm  my-5" style="padding: 5px 25px">En savoir plus</buton></a>
              </div>
          </div>
          <div class="col-md-6">
            <img src="../assets/images/nous.jpg" alt="" class="w-100" srcset="">
          </div>
        </div>
      </div>
    </section>
    {{-- ici la partie contactez-nous de la page d'acceuil eic --}}
    @include('contact')
   </main>
   {{-- ici le footer de notre page d'acceuil avec nos liens réseaux sociaux --}}

      {{-- copions le script du fichier bundle min js de boostrap ici --}}
    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>

    @endsection()
