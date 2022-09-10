<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Page services</title>
</head>
<body>
  {{-- inclusion du header --}}
  @include('include.header')
    <main>
        <section class="d-flex align-items-center service-image">
            <div class="container aos-init aos-animate text-white fw-bold" data-aos="fade-up" data-aos-delay="500">
              <h1 class="ecrit text-center">NOS SERVICES</h1>
              <h3 class="ecrit">le prestataire, dont vous avez besoin pour une maison propre  et pour vous offrir un environnement de travail agréable</h3>
              <button class=" bg-white boutton-acroche"><a class="bouton-accroche text-success" href="#contacts">Contactez-nous</a></button>
            </div>
          </section>
          <section>
            <div class="container-fluid page-service-bar text-center">
                <div class="row">
                   <div class="col-12 mx-auto mt-5 text-white" style="width: 750px">
                    <h1 class="mt-5">NOUS OFFRONS TOUTES SORTES DE SERVICES DE NETTOYAGE OU DE MENAGES</h1>
                <p class="mt-5 fs-3">
                  Nous sommes spécialisé dans le service de bio nettoyage, le ménage, le recrutement, et la formation.
                </p>
                   </div>
                </div>
            </div>
          </section>
          {{-- section de ménage et nétoyage --}}
          <section>
            <div class="container text-center section-formation">
              <p class="fs-1 mt-5" style="color: #268D72">NETTOYAGE ET MENAGE</p>
              <div class="row">
                <div class="container py-5">
                  <div class="row mt-5">
                    <div class="col-md-4 col-sm-6">
                      <div class="card mb-4 shadow-sm">
                        <img src="../assets/images/nettoyage.webp" alt="" class="w-100">
                        <div class="card-body" style="height: 235px">
                          <h1 class="card-title text-center fs-4" style="color: #268D72" fs-2>Balayage humide des sols</h1>.
                          <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                            Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                          <div class="text-center">
                            <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="card mb-4 shadow-sm">
                        <img src="../assets/images/menage.webp" alt="" class="w-100">
                        <div class="card-body" style="height: 235px">
                          <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des surfaces humides</h1>.
                          <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                            Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                          <div class="text-center">
                            <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="card mb-4 shadow-sm">
                        <img src="../assets/images/formation.jpg" alt="" class="w-100">
                        <div class="card-body" style="height: 235px">
                          <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des moquettes </h1>.
                          <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                            Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                          <div class="text-center">
                            <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="container ">
                    <div class="row mt-5">
                      <div class="col-md-4 col-sm-6">
                        <div class="card mb-4 shadow-sm">
                          <img src="../assets/images/nettoyage.webp" alt="" class="w-100">
                          <div class="card-body" style="height: 235px">
                            <h1 class="card-title text-center fs-4" style="color: #268D72" fs-2>Balayage humide des sols</h1>.
                            <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                              Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                            <div class="text-center">
                              <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="card mb-4 shadow-sm">
                          <img src="../assets/images/menage.webp" alt="" class="w-100">
                          <div class="card-body" style="height: 235px">
                            <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des surfaces humides</h1>.
                            <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                              Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                            <div class="text-center">
                              <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="card mb-4 shadow-sm">
                          <img src="../assets/images/formation.jpg" alt="" class="w-100">
                          <div class="card-body" style="height: 235px">
                            <h1 class="card-title text-center fs-4" style="color: #268D72">Nettoyage des moquettes </h1>.
                            <p class="fw-light">Pour connaitre le montant des prestations, demandez un devis en ligne.
                              Pour cela, il vous suffit de remplir les champs obligatoires du formulaire et de nous l’envoyer.</p>
                            <div class="text-center">
                              <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">Reserver</buton>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </section>
          <div class="container-fluid service-bar ">
     
          </div>
          {{-- Section d formation-recrutement --}}
          <section>
            <div class="container">
              <p class="text-center" style="color: #268D72">Nous vous offrons la possibilité de vous faire former ou de faire partie de nos agents de services</p>
              <div class="row">
                <div class="col">
                  <img src="../assets/images/recru.webp" class="img-fluid" alt="">
                </div>
                <div class="col border border-3">
                  <h1 class="mt-5">Service premium et haut niveau d'expertise</h1>
  La rigueur est notre maître-mot : nous travaillons uniquement avec une liste de
 modules fiables, entretenus et certifiés, ayant fait leurs preuves sur plusieurs milliers de projets Web.
  Nous utilisons des technologies et outils modernes. Nous apportons beaucoup d’importance aux règlementations légales, 
  normes Web et préconisations Google en vigueur.
                  <div class="container text-center mt-5">
                    <button class="bg-success text-white">Faire une demande</button>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </main>
      <footer>
    <div class="footer-top text-white" style="background-color: #268D72">
      <div class="container py-5">
        <div class="row d-flex justify-content-around">
          <div class="col-lg-3 col-md-6 footer-contact">
           <h4>CONTACTS</h4>
           <p> Quartier Djidjolé, Rue d'évala, <br>
            Derrière la pharmacie Mathilda.<br>
            Lomé-Togo.<br><br>
              <strong>Tel : </strong>93 59 12 29 / 96 00 62 76<br>
              <strong>Email:</strong> sessoayida@gmail.com<br>
          </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-frequence">
            <h4>FREQUENCE D'INTERVENTION</h4>
            <P>Suivant les demandes du client, nous intervenons 7jours/7 et plus fréquement :</P>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Journalier ;</li>
              <li><i class="bx bx-chevron-right"></i>Hebdomadaire ;</li>
              <li><i class="bx bx-chevron-right"></i>Mensuel ;</li>
              <li><i class="bx bx-chevron-right"></i>Trimestriel.</li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-service">
            <h4>HORAIRE ET FREQUENCE</h4>
            <p>Nous nous adaptons à vos horaires et aux contraintes de fonctionnement de vos locaux.
              C’est pourquoi nous vous proposons des prestations qui couvrent différentes plages horaires :</p>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Les horaires de bureaux : 9h - 17h 30 </li>
              <li><i class="bx bx-chevron-right"></i>Avant ou après les horaires d’ouverture et de fermeture.</li>
              <li><i class="bx bx-chevron-right"></i> La nuit.</li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>NOS RESEAUX SOCIAUX</h4>
            <p>Vous pouvez nous contacter via nos différents réseaux sociaux</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter">twitter</i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook">facebook</i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram">instagram</i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i>whatsapp</a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i>linkedin</a>
            </div>
          </div>

        </div>
      </div>
    </div>
   </footer>
    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>