<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfiles/header.css')}}">
    <title>Ventes</title>
</head>
<body>
    <header>
        <h1>Magnan Immobilier</h1>
        <nav>   
            <a href={{"/"}}>Page d'accueil</a> 
            <a href={{"/Location"}}>Biens en ventes</a>  
            <a href={{"/Propos"}}>A propos de nous</a>
            <a href={{"/Contact"}}>Contact</a>
        </nav>

    </header>
    <h1 class="Y">Nos bien dans l'agence</h1>
    <table class="T">
        <tr> 
       
            <td>Name</td>
            <td>Adresse</td>
            <td>Type location</td>
            <td>Type</td>
            <td>Agent</td>
            <td>Etat</td>
            <td>Image</td>
        </tr>

        @foreach($house as $data)
    <tr>    

      <th>{{$data->name}}</th>
      <th>{{$data->adresse}}</th>
      <th>{{$data->typelocation}}</th>
      <th>{{$data->type}}</th>
      <th>{{$data->nameagent}}</th>
      <th>{{$data->etat}}</th>
      <th><img src="{{$data->image}}" width="100"height="100"></th>
                       
    </tr>
@endforeach
    </table>
</body>
</html>