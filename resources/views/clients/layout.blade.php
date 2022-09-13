<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client crud</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        {{-- ici le yield correspond non pas au centre de notre layout client mais à l'emplacement de notre layout oû sera appelé une vue spécifique et il indique que le contenu de chaque page qui va hériter de ce layout sera ici--}}
        @yield('content')
        {{-- on aurait pu indiquer @yield('titre') pour dire c'est ici qu'on va mettre le titre d'une vue qui hérite de notre layout 
        il faut comprendre que c'est là oû on place un yield que la vue qui a hérité du yield apparaitra--}}
    </div>
</body>
</html>