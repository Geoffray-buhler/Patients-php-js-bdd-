<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'hopital velpo</title>
    <!-- Css bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./css/autocomplete.css">
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
                    <input class="form-control" name="id" data-autocomplete="search.php" />
                    <h4 class="text-center">Liste<h4>
                </div>
 
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
        <script type="text/javascript" src="./js/autocomplete.js"></script>
    <script type="text/javascript">
    AutoComplete({Delay: 300, EmptyMessage: "Oh Shit ! No results ! Tou foutch mon gueule !", Limit: 20, MinChars: 0,
        _Post: function(response) {
            try {
                var returnResponse = [];

                //JSON return
                var json = JSON.parse(response);


                if (Object.keys(json).length === 0) {
                    return "";
                }

                if (Array.isArray(json)) {
                    for (var i = 0 ; i < Object.keys(json).length; i++) {
                        returnResponse[returnResponse.length] = { "Value": json[i].id, "Label": this._Highlight(json[i].firstname) };
                    }
                } else {
                    for (var value in json) {
                        returnResponse.push({
                            "Value": value,
                            "Label": this._Highlight(json[value])
                        });
                    }
                }

                return returnResponse;
            } catch (event) {
                //HTML return
                return response;
            }
        },});</script>
</body>
</html>