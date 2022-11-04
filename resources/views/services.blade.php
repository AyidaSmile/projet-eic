<body>
<main>
    @extends('layouts.app')

    {{-- LAYOUT APP POUR dire qu'il n'a qu'à hériter des choses du layout app et ici c'est le header et le footer que j'ai mis dans app--}}
    {{-- ici le section content encadre le contenu de la vue pour qu'il puisse être pris par le layout => à chaque fois qu'une chose hérite du layout il doit être entouré par les sections--}}
    @section('content')

    <section class="d-flex align-items-center service-image">
                    <div class="container aos-init aos-animate text-white fw-bold" data-aos="fade-up" data-aos-delay="500">
                        <marquee behavior="" direction="">
                            <h3 class="text-white fw-bold w-50">le prestataire, dont vous avez besoin pour une maison propre  et pour vous offrir un environnement de travail agréable. </h3>
                        </marquee>
                        <button class=" bg-white boutton-acroche mt-5 m-auto P-2 rounded fs-3"><a class="bouton-accroche text-center text-success " href="page-contact">Contactez-nous</a></button>
                    </div>
                    </section>
                    <section>
                    <div class="container-fluid page-service-bar text-center">
                        <div class="row">
                            <div class="col-12 mx-auto mt-5 text-white" style="width: 750px">
                           <marquee behavior="" direction="">
                            <h1 class="mt-5">NOUS OFFRONS TOUTES SORTES DE SERVICES DE NETTOYAGE OU DE MENAGES</h1>
                           </marquee>
                        <p class="mt-5 fs-3">
                            Pour reserver une prestation, cliquez
                            sur le boutton reserver, remplissez ensuite les champs obligatoires
                            du formulaire et cliquez sur envoyer. Nous vous enverrons un mail
                            avec tous les détail possibles.
                        </p>
                            </div>
                        </div>
                    </div>
                    </section>
                    {{-- section de ménage et nétoyage --}}
                    <section>
                    {{-- <div class="container text-center">
                        <p class="fs-1 mt-5" style="color: #268D72">NETTOYAGE ET MENAGE</p>
                        <div class="row">
                        <div class="container">
                            <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <img src="../assets/images/nettoyage.webp" alt="" class="w-100">
                                <div class="card-body" >
                                    <h1 class="card-title text-center fs-4" style="color: #268D72" fs-2>Balayage humide des sols</h1>.
                                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                                    <div class="text-center">
                                    <a href="{{ route('register') }}">
                                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <img src="../assets/images/menage.webp" alt="" class="w-100">
                                <div class="card-body">
                                    <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des surfaces humides</h1>.
                                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                                    <div class="text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                                        </a>
                                        </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <img src="../assets/images/formation.jpg" alt="" class="w-100">
                                <div class="card-body">
                                    <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des moquettes </h1>.
                                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                                    <div class="text-center">
                                        <a href="{{ route('register') }}">
                                    <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>

                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                            </div> --}}

     <div class="container">
        <p class="fs-1 mt-5 mb-5 text-center" style="color: #268D72">SERVICES DE NETTOYAGE</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="../assets/images/balaye.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title text-center fs-4" style="color: #268D72">Balayage humide des sols </h1>.
                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer en cliquant sur le boutton reserver.</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('register') }}">
                        <buton type="button" class="text-white bg-success  btn btn-sm btn-outline-secondary">RESERVER</buton>
                    </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../assets/images/nettoyage.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des bureaux ou locaux</h1>.
                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer en cliquant sur le boutton reserver.</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('register') }}">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">RESERVER</buton>
                    </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="../assets/images/vitres.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage de vitres </h1>.
                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer en cliquant sur le boutton reserver.</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('register') }}">
                        <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">RESERVER</buton>
                    </a>
                </div>
              </div>
            </div>
          </div>
     </div>
        </section>
        <section>
                    {{-- <div class="container text-center">
                        <p class="fs-1 mt-5" style="color: #268D72">NETTOYAGE ET MENAGE</p>
                        <div class="row">
                        <div class="container">
                            <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <img src="../assets/images/nettoyage.webp" alt="" class="w-100">
                                <div class="card-body" >
                                    <h1 class="card-title text-center fs-4" style="color: #268D72" fs-2>Balayage humide des sols</h1>.
                                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                                    <div class="text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                                        </a>
                                        </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <img src="../assets/images/menage.webp" alt="" class="w-100">
                                <div class="card-body">
                                    <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des bureaux ou locaux</h1>.
                                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                                    <div class="text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                                        </a>
                                        </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                <img src="../assets/images/formation.jpg" alt="" class="w-100">
                                <div class="card-body">
                                    <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des moquettes </h1>.
                                    <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                    Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                                    <div class="text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                                        </a>
                                        </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div> --}}
                        <div class="container mb-5">
                            <p class="fs-1 mt-5 mb-5 text-center" style="color: #268D72">SERVICE DE MENAGE</p>

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="../assets/images/men.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h1 class="card-title text-center fs-4" style="color: #268D72">Ménage à domicile</h1>.
                                        <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                        Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer en cliquant sur le boutton reserver.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success  btn btn-sm btn-outline-secondary">RESERVER</buton>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="../assets/images/menages.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h1 class="card-title text-center fs-4" style="color: #268D72">Lessive à domicile</h1>.
                                        <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                        Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer en cliquant sur le boutton reserver.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">RESERVER</buton>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="../assets/images/cuisine.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h1 class="card-title text-center fs-4" style="color: #268D72">Besoin d'une domestique</h1>.
                                        <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                                        Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer en cliquant sur le boutton reserver.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="{{ route('register') }}">
                                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">RESERVER</buton>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         </div>

        </section>
        <div class="container-fluid service-bar ">
        </div>
                    {{-- Section de formation-recrutement --}}
        <section>
                        <div class="container mt-5">
                        <p class="text-center my-5" style="color: #268D72">Nous vous offrons la possibilité de vous faire former ou de faire partie de nos agents de services</p>
                        <div class="row">
                        <div class="col-md-6">
                            <img src="../assets/images/recru.webp" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6 border border-3">
                            <h3 class="mt-4 text-center">INFORMATION RELATIVE AUX RECRUTEMENTS ET FORMATION A EIC</h3>
                            <p>
                                La rigueur est notre maître-mot : Nous recrutons des agents nettoyeurs et des femmes
                                ou hommes de ménages en fonction du besoin client.
                            </p>
                            <p>
                                Pour nos formations, nous formons
                                uniquement des personnes motivé, qui aiment le travail et qui sont rigoureux.
                                Nous utilisons des techniques approprié et nous vous offrons une formation de qualité
                                afin qu'à la fin de la formation vous ayez acquis des compétences adéquates pour
                                etre les meilleurs techniciens en hygiène et assainissement.
                           </p>
                            <div class="container text-center mt-5">
                            <a href="page-contact">
                                <button class="bg-success text-white">Faire une demande</button>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
        </section>
    </main>
<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
@endsection()

</body>
