<!DOCTYPE html>
<body>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-expand-md navbar navbar-dark bg-dark sticky-top">
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{route('home')}}">Accueil</a>
                <a class="nav-link" href="{{route('products.index')}}">Liste des produits</a>
                <a class="nav-link" href="{{route('products.create')}}">Créer un produit</a>

                @guest
                        <a class="nav-link" href="{{route('login')}}">Connexion</a>
                        <a class="nav-link" href="{{route('login')}}">S'inscrire</a>
                @endguest
                @auth
                        <a class="nav-link" href="{{route('logout')}}">Se déconnecter</a>
                @endauth


            </div>
        </div>
    </nav>
</body>
</html>
