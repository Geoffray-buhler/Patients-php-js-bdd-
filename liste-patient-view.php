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
        <a class="nav-link" href="./ajout-patient.php">Ajout des patients<span class="sr-only">(current)</span></a>
    </nav>
        <div class="container">
            <div class="row d-flex flex-column">
                <div class="col-12 d-flex flex-column">
                    <h3 class="text-center">Liste des patients</h3> 
                    <h4 class="text-center">Recherche<h4>
                    <!-- <input class="form-control" name="id" data-autocomplete="search.php" /> -->
                    <my-autocomplete class="form-control" query-url="search.php" query-field="q" ></my-autocomplete>
                    <h4 class="text-center">Liste<h4>
                </div>
                <div id="liste-complete">
 
        <?php
        foreach($patients as $data)
        {
        ?>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h4>Nom </h4><p><?php echo $data['firstname'];?></p>
                        <h4>Prénom </h4><p><?php echo $data['lastname'];?></p>
                        <a type="submit" method="POST" class="btn btn-info" href="./profil-patient.php?id=<?= $data['id'] ?>">Informations</a>
                        <a type="submit" method="POST" class="btn btn-danger" href="./Delete-patients.php?id=<?= $data['id'] ?>">Effacer</a>
                    </div>
                </div>  
        <?php }?> 
                </div>
            </div>
        </div>  
        <script type="text/javascript" src="./js/MyAutocompletion.js"></script>
    <script type="text/javascript">
        const $autoComp = document.querySelector('my-autocomplete');
        $autoComp.addEventListener('select', (evt) => {
            const patient = evt.detail.patient;
            window.location = `./profil-patient.php?id=${patient.id}`;
        })
        $autoComp._Format = function(item){
            return item.firstname + ' ' + item.lastname;
        }
    </script>
</body>
</html>