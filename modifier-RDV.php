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
        <a class="nav-link" href="./ajout-patient.php">Ajout des patients<span class="sr-only">(current)</span></a>
    </nav>
        <div class="container">
            <div class="row d-flex flex-column">
                <div class="col-12 d-flex flex-column">
                    <h3 class="text-center">Modification du rendez-vous</h3> 
                </div>
 
        <?php
        try 
        {
            $bdd = new PDO('mysql:host=localhost:3306;dbname=hospitale2n;charset=utf8','root','');
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            die('Erreur: ' . $e->getMessage());
        }

        if(isset($_REQUEST['id']))
        {
            $stmt = $bdd -> prepare("SELECT DATE(dateHour) AS dates, TIME(dateHour) AS timess, patients.lastname, patients.firstname, patients.id AS idPatients, appointments.id, appointments.idPatients FROM appointments JOIN patients ON patients.id = appointments.idPatients WHERE appointments.id=?");
            $res = $stmt-> execute(array($_REQUEST["id"]));
        
            $data = $stmt->fetch();
            {
            ?>
                   <form action="update-RDV.php?id=<?=$_REQUEST["id"]?>" method="POST">
                        <h2><?= $data['lastname']?> <?= $data['firstname']?></h2>
                        <input type="date" class="form-control m-3" name="dates" value=<?= $data['dates']?>>
                        <input type="time" class="form-control m-3" name="timess" value=<?= $data['timess']?>>
                        <button class="btn btn-warning" type="submit">Modifier</button>
                        <a class="btn btn-danger" href="./liste-rendezvous.php">Retour</a>
                    </form>
            <?php }

        }?>
            
            </div>
        </div>  
</body>
</html>