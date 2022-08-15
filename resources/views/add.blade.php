<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    <h1>AJOUTER UN BIEN :</h1>   
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nom de la maison</label>
                <input type="text" class="name" name="name" placeholder="Nom de la maison ">
            </div>

            <div class="form-group">
                <label for="">Adresse</label>
                <input type="text" class="Adresse" name="Adresse" placeholder="Adresse" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$+" title="Invalid email address">
            </div>

            <div class="form-group">
                <label for="">Type d'appartement</label>
                <input type="text" class="TypeA" name="TypeA" placeholder="Type d'appartement">
            </div>

            <div class="form-group">
                <label for="">Type de location</label>
                <input type="text" class="TypeL" name="TypeL" placeholder="Type de location ">
            </div>

            <div class="form-group">
                <label for="">Etat</label>
                <input type="text" class="Etat" name="Etat" placeholder="Etat">
            </div>

            <div class="form-group">
                <label for="">Nom de l'agent</label>
                <input type="text" class="NomA" name="NomA" placeholder="Nom de l'agent">
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="text" class="Image" name="Image" placeholder="Insérer image">
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Sauvegarder</button>
            </div>

        </form>
    </div>
</body>
</html>
