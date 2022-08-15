<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Modifier Maison</h1>
    <form action="/edit" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$house['id']}}">
        <input type="text" name="name" value="{{$house['name']}}"><br></br>
        <input type="text" name="adresse" value="{{$house['adresse']}}"><br></br>
        <input type="text" name="etat" value="{{$house['etat']}}"><br></br>
        <input type="text" name="nameagent" value="{{$house['nameagent']}}"><br></br>
        <button type="submit">Editer</button>
    </form>
</body>
</html>