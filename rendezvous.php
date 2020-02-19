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
        <a class="nav-link" href="./ajout-rendezvous.php">Ajout d'un RDV<span class="sr-only">(current)</span></a>
    </nav>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Informations RDV</h3> 
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
            $stmt = $bdd -> prepare("SELECT appointments.dateHour AS 'dateHour', appointments.id, appointments.idPatients AS 'idPatients', patients.firstname AS 'firstname', patients.lastname AS 'lastname', patients.phone AS 'phone' FROM appointments JOIN patients ON appointments.idPatients = patients.id WHERE appointments.id=? ");
            $res = $stmt-> execute(array($_REQUEST["id"]));
        
            $data = $stmt->fetch();
            {
            ?>
            <div class="card">
                <div class="card-body text-center">
                    Prénom : <p><?php echo $data['firstname'] ?></p> Nom :  <p><?php echo $data['lastname'] ?></p> Le <p><?php echo $data['dateHour'] ?></p>Numero contact : <p><?php echo $data['phone'] ?></p>
                    <a class="btn btn-warning" href="./modifier-RDV?id=<?= $_REQUEST["id"] ?>">Modifier</a>
                </div>
            </div>
            <img src="http://www.toplol.com/images/toplol/toplol_791.jpg"/>
            <?php }

        }?>
            
            </div>
        </div>  
</body>
</html>