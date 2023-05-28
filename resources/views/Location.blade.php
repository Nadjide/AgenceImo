<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ventes</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1>Magnan Immobilier</h1>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-white">Page d'accueil</a></li>
                    <li><a href="/Location" class="nav-link px-2 text-white">Biens en ventes</a></li>
                    <li><a href="/Propos" class="nav-link px-2 text-white">A propos de nous</a></li>
                    <li><a href="/Contact" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Nos biens dans l'agence</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Adresse</th>
                <th>Type location</th>
                <th>Type</th>
                <th>Agent</th>
                <th>Etat</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
                @foreach($house as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->adresse}}</td>
                    <td>{{$data->type}}</td>
                    <td>{{$data->typelocation}}</td>
                    <td>{{$data->nameagent}}</td>
                    <td>{{$data->etat}}</td>
                    <td><img src="{{asset('storage/'.$data->image)}}" alt="" class="img-thumbnail" style="width:100px;height:100px;"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
