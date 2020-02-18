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
        <a class="nav-link" href="./ajout-rendezvous.php">Prendre un Rendez-vous !<span class="sr-only">(current)</span></a>
    </nav>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h3 class="text-center">Liste des RDV</h3> 
                </div>
 
        <?php
        try 
        {
            $bdd = new PDO('mysql:host=localhost:3306;dbname=hospitale2n;charset=utf8','root','');
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(Exeption $e)
        {
            die('Erreur: ' . $e->getMessage());
        }
        $sql = "SELECT appointments.dateHour, appointments.id AS 'idapp', appointments.idPatients, patients.id, patients.lastname, patients.firstname FROM appointments INNER JOIN patients ON appointments.idPatients = patients.id ORDER BY dateHour
";
        $res = $bdd->query($sql);
        while($data = $res->fetch())
        {
        ?>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h4>Nom </h4><p><?= $data['firstname'];?></p>
                        <h4>Prénom </h4><p><?= $data['lastname'];?></p>
                        <h4>RDV</h4><p><?= $data['dateHour'];?></p>
                        <a class="btn btn-info" href="./rendezvous.php?id=<?= $data['idapp'] ?>">Informations</a>
                        <a class="btn btn-danger" href="./Delete-rendezvous.php?id=<?= $data['idapp'] ?>">Effacer</a>
                    </div>
                </div> 
        <?php }?> 
            </div>
        </div>  
</body>
</html>
