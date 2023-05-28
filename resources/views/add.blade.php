<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <h1 class="mb-4">AJOUTER UN BIEN :</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom de la maison</label>
                <input type="text" class="form-control" name="name" placeholder="Nom de la maison">
            </div>

            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control" name="Adresse" placeholder="Adresse">
            </div>

            <div class="mb-3">
                <label class="form-label">Type d'appartement</label>
                <input type="text" class="form-control" name="TypeA" placeholder="Type d'appartement">
            </div>

            <div class="mb-3">
                <label class="form-label">Type de location</label>
                <input type="text" class="form-control" name="TypeL" placeholder="Type de location ">
            </div>

            <div class="mb-3">
                <label class="form-label">Etat</label>
                <input type="text" class="form-control" name="Etat" placeholder="Etat">
            </div>

            <div class="mb-3">
                <label class="form-label">Nom de l'agent</label>
                <input type="text" class="form-control" name="NomA" placeholder="Nom de l'agent">
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" name="Image" placeholder="Insérer image">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
