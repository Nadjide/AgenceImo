<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfiles/header.css')}}">
    <title>Liste appartement</title>
</head>
<body>
    <h1>Liste appartement</h1>
    <table class="T">
    <tr> 
        <td>id</td>   
        <td>Name</td>
        <td>Adresse</td>
        <td>Type location</td>
        <td>Type</td>
        <td>Agent</td>
        <td>Etat</td>
        <td>Image</td>
        <td>Action</td>
    </tr>

    @foreach($house as $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->name}}</th>
      <th>{{$data->adresse}}</th>
      <th>{{$data->typelocation}}</th>
      <th>{{$data->type}}</th>
      <th>{{$data->nameagent}}</th>
      <th>{{$data->etat}}</th>
      <th><img src="{{$data->image}}" width="100"height="100"></th>
      <th>
          <a href={{"delete/".$data->id}}>Delete</a>
          <a href={{"edit/".$data->id}}>Editer</a>
    
    </th>

                       
    </tr>
@endforeach
    </table>

</body>
</html>