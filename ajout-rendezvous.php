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
    <link rel="stylesheet" href="./css/autocomplete.css">
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
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <form action="add-RDV.php" method="POST">
                    <div class="form-group d-flex justify-content-center flex-column">
                    <h3 class="text-center">Prise de RDV</h3> 
                    <input type="date" class="form-control m-3" name="dateRDV" placeholder="Date du RDV">
                    <input type="time" min="07:00" max="19:30" required class="form-control m-3" name="HeureRDV" placeholder="Heure du RDV">
                    <input class="form-control m-3" name="id" data-autocomplete="search.php" />
                    <button type="submit" class="btn btn-primary ml-5">Enregistrer</button>
                    <div>
                </form>
            </div>
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
        },});
</script>
</body>
</html>