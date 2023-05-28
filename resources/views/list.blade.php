<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfiles/header.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Liste appartement</title>
</head>
<body>
    <div class="container my-4">
        <h1 class="mb-4">Liste appartement</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Adresse</th>
                    <th>Type location</th>
                    <th>Type</th>
                    <th>Agent</th>
                    <th>Etat</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($house as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->adresse}}</td>
                    <td>{{$data->typelocation}}</td>
                    <td>{{$data->type}}</td>
                    <td>{{$data->nameagent}}</td>
                    <td>{{$data->etat}}</td>
                    <td><img src="{{$data->image}}" width="100"height="100"></td>
                    <td>
                        <a class="btn btn-danger" href={{"delete/".$data->id}}>Delete</a>
                        <a class="btn btn-primary" href={{"edit/".$data->id}}>Editer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
