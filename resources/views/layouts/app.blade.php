<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
      {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbarColor01" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> --}}

        <header>
            <nav class="navbar navbar-expand-lg fixed-top " style="background-color: #268D72">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><img src="./assets/images/loooo.png" class="logo" alt="" srcset=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarColor01">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active text-white" href="/">Acceuil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active text-white" href="/services">Services</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link active text-white"  href="#">A propos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active text-white "  href="page-contact">Contacts</a>
                        </li>
                      </ul>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"><button class="btn btn-outline-light ms-4" type="submit">connecter</button></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}"><button class="btn btn-outline-light ms-4" type="submit">S'inscrire</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>
           </header>
        <main >
            @yield('content')
            {{-- ici un yield correspond au mileu de notre layout app et le yield ('content') montre seulement que c'est ici que le contenu d'une autre page peut rester --}}
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
                    <P>Suivant les demandes du client, nous intervenons 7jours/7 et plus fréquement:</P>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i>Journalier </li>
                      <li><i class="bx bx-chevron-right"></i>Hebdomadaire </li>
                      <li><i class="bx bx-chevron-right"></i>Mensuel </li>
                      <li><i class="bx bx-chevron-right"></i>Trimestriel</li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-service">
                    <h4>HORAIRE ET FREQUENCE</h4>
                    <p>Nous nous adaptons à vos horaires et aux contraintes de fonctionnement de vos locaux.
                      C’est pourquoi nous vous proposons des prestations qui couvrent différentes plages horaires :</p>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i>Les horaires de bureaux : 9h - 17h 30 </li>
                      <li><i class="bx bx-chevron-right"></i>Avant ou après les horaires d’ouverture et de fermeture</li>
                      <li><i class="bx bx-chevron-right"></i> La nuit</li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                    <h4>NOS RESEAUX SOCIAUX</h4>
                    <p>Vous pouvez nous contacter via nos différents réseaux sociaux</p>
                    <div class="social-links mt-3">
                      <a href="https://twitter.com/SessoAyida" class="twitter"><img src="./assets/images/Twitter.webp" id="icon" alt=""></a>
                      <a href="https://www.facebook.com/profile.php?id=100075703622354" class="facebook"><img src="./assets/images/facebook.webp" id="icon" alt=""></a>
                      <a href="https://www.instagram.com/sesso279/" class="instagram"><img src="./assets/images/instagram.webp" id="icon" alt=""></a>
                      <a href="https://www.linkedin.com/in/ayida-sesso-ab7a66228/" class="linkedin"><img src="./assets/images/linkedin.png" id="icon-linkedin" alt=""></a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
           </footer>

    </div>
    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
