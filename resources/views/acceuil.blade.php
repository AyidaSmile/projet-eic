<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- avec laravel pour mettre des liens on ouvre des accollades--}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    

    <title>Page d'acceuil</title>
</head>
<body>
   @include('include.header')
   <main>
    {{-- ici notre image d'acceuil et le text d'accroche de la page d'acceuil eic--}}
    <section class="d-flex align-items-center img-fluid image">
      <div class="container aos-init aos-animate text-white fw-bold" data-aos="fade-up" data-aos-delay="500">
        <div class="row">
          <div class="col-12">
            <h1 class="ecrit">Everthing is clean, tout est propre en un clic</h1>
            <h3 class="ecrit">le prestataire, dont vous avez besoin pour une maison propre  et pour vous offrir un environnement de travail agréable;</h3>
          </div>
        </div>
        <button class=" bg-white boutton-acroche"><a class="bouton-accroche text-success" href="#contacts">Contactez-nous</a></button>
      </div>
    </section>
    {{-- ici la partie service de la page d'acceuil eic --}}
    <section>
      <div class="container-fluid service-bar ">
     
      </div>
      <div class="container-fluid text-center mt-5 ">
            <h1 class="fw-bold " style="color: #268D72">NOS SERVICES</h1>
            <h2 class="text-muted">En un seul clic faites la demande de nos services ou que vous soyez et ou que vous voulez</h2>
      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-4 shadow-sm">
              <img src="../assets/images/nettoyage.webp" alt="" class="w-100">
              <div class="card-body" style="height: 259.8px">
                <h1 class="card-title text-center fs-2">Eco Entretien(Pour l'entretien)</h1>.
                <p class="card-text text-center fw-normal">
                  Pour assurer au quotidien l'image de vos services et locaux nous mettons à votre disposition des agents compétents.
                </p>
                <div class="text-center">
                  <buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-4 shadow-sm">
              <img src="../assets/images/menage.webp" alt="" class="w-100">
              <div class="card-body">
                <h1 class="card-title text-center fs-2">Eco Exclusif(Service à domicile)</h1>.
                <p class="card-text text-center fw-normal">
                  Nous mettons à votre disposition des femmes de ménage  professionnelle pour vous  rendre la vie plus légère et pllus brillante
                </p>
                <div class="text-center">
                  <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-4 shadow-sm">
              <img src="../assets/images/formation.jpg" alt="" class="w-100">
              <div class="card-body" style="height: 259.8px">
                <h1 class="card-title text-center fs-2">Recrutement et Formation des agents</h1>.
                <p class="card-text text-center fw-normal">
                  Nous offrons une formation de qualité en hygiène et assainissement à nos participants et nous recrutons des agents d'entretiens et des domestiques
                </p>
                <div class="text-center">
                  <buton type="submit" class=" text-white bg-success btn btn-sm btn-outline-secondary">En savoir plus</buton>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- ici la partie à propos de la page d'acceuil eic --}}
    <section>
      <div class="container-fluid service-bar">

      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-6 align-items-center">
            <h1 style="color: #268D72" class="text-center">Qui sommes-nous ?</h1>
            <div class=" fw-normal mb-5 text-center fs-4">La société EIC est une société multifonctionnelle spécialisée dans le service de  bio nettioyage, le recrutement, et la formation .</div>
            <p class="fw-light fs-3 text-center">Nous offrons des services de bio nettoyages des surfaces des locaux, nous recrutons et formons des techniciens d'entretiens de surfaces de locaux pour les 
              entreprises et domiciles. placement des femmes de ménages et garçon de chambre. Nos services sont offert suivant le créneau horaire de nos clients .</p>
              <div class="text-center ">
              <a href="#"><buton type="button" class="text-white bg-success btn btn-sm btn-outline-secondary mt-5" style="padding: 5px 25px">En savoir plus</buton></a>
              </div>
          </div>
          <div class="col-6">
            <img src="../assets/images/nous.jpg" alt="" class="w-100" srcset="">
          </div>
        </div>
      </div>
    </section>
    {{-- ici la partie contactez-nous de la page d'acceuil eic --}}
    <section>
      <div class="container-fluid service-bar">

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
            <form class="row g-3" >
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nom</label>
                <input type="email" class="form-control" placeholder="Saisir votre nom">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Prenom</label>
                <input type="password" class="form-control" placeholder="Saisir votre prenom">
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Saisir votre email">
              </div>
              <div class=" col-12 mb-5">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary buton-contact" style="background-color: #268D72">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
   </main>
   {{-- ici le footer de notre page d'acceuil avec nos liens réseaux sociaux --}}
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
   
      {{-- copions le script du fichier bundle min js de boostrap ici --}}
    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>