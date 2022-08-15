<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfiles/header.css')}}">
    <link rel="stylesheet" href="{{asset('cssfiles/other.css')}}">
    <title>Page d'accueil</title>
</head>
<body>
    <header>
        <h1>Magnan Immobilier</h1>
        <nav>   
            <a href={{"/"}}>Page d'accueil</a> 
            <a href={{"/Location"}}>Biens en ventes</a>  
            <a href={{"/Propos"}}>A propos de nous</a>
            <a href={{"/Contact"}}>Contact</a>
            <a href={{"/login"}}>Administrateur</a>
        </nav>

    </header>
    <div class="fond">   
        <h1 class="TT">NOS BIENS DISPONIBLES EN VENTE OU EN LOCATION</h1>

        <div class="button_container">
            <button class="btn"><span><a href={{"/Location"}}>Biens en vente</a></span></button>

        </div>

    </div>
</body>
</html>