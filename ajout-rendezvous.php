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
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<!-- NavBar avec image -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">
        <img src="./assets/HVElpo.png" width="30" height="30" alt="Icone de l'hopital Velpeau">
        Hopital velpo
    </a>
    <a class="nav-link" href="./index.php">Accueil<span class="sr-only">(current)</span></a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <form action="add-RDV.php" method="POST">
                    <div class="form-group d-flex justify-content-center flex-column">
                    <h3 class="text-center">Prise de RDV</h3> 
                    <input type="date" class="form-control m-3" name="dateRDV" placeholder="Date du RDV">
                    <input type="time" min="07:00" max="19:30" required class="form-control m-3" name="HeureRDV" placeholder="Heure du RDV">
                    <input class="form-control d-none m-3 hidden" name="id"/>
                    <my-autocomplete class="form-control m-3" limit-value=0 query-url="search.php" query-field="q"></my-autocomplete>
                    <button type="submit" class="btn btn-primary ml-5">Enregistrer</button>
                    <div>
                </form>
            </div>
        </div>
    </div> 
    <script type="text/javascript" src="./js/MyAutocompletion.js"></script>
    <script type="text/javascript">
     const $autoComp = document.querySelector('my-autocomplete');
        $autoComp.addEventListener('select', (evt) => {
            const patient = evt.detail.patient;
            $inputHidden = document.querySelector('.hidden');
            $inputHidden.value = patient.id;
            console.log(patient);
        })
        $autoComp._Format = function(item){
            return item.firstname + ' ' + item.lastname;
        }
</script>
</body>
</html>