<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'hopital velpo</title>
    <!-- Css bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
<!-- NavBar avec image -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">
        <img src="./assets/HVElpo.png" width="30" height="30" alt="Icone de l'hopital Velpeau">
        Hopital velpo
    </a>
    <a class="nav-link" href="./index.php">Accueil<span class="sr-only">(current)</span></a>
    <a class="nav-link" href="./liste-patient.php">Liste des patients<span class="sr-only">(current)</span></a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <form action="add-patients.php" method="POST">
                    <div class="form-group d-flex justify-content-center flex-column">
                    <h3 class="text-center">Fiche patient</h3> 
                    <input type="text" class="form-control m-3" name="lastname" placeholder="Nom Du Patient">
                    <input type="text" class="form-control m-3" name="firstname" placeholder="Prénom Du Patient">
                    <input type="date" class="form-control m-3" name="birthdate" placeholder="Date de naissance">
                    <input type="text" class="form-control m-3" name="phone" placeholder="Numero de téléphone">
                    <input type="mail" class="form-control m-3" name="mail" placeholder="E-mail">
                    <button type="submit" class="btn btn-primary ml-5">Enregistrer</button>
                    <div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>