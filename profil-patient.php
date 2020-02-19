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
                    <h3 class="text-center">Informations patients</h3> 
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
            $stmt = $bdd -> prepare("SELECT * FROM patients LEFT OUTER JOIN appointments ON patients.id = appointments.idPatients WHERE patients.id=?");
            $res = $stmt-> execute(array($_REQUEST["id"]));
        
            $data = $stmt->fetchAll();
            {
            ?>
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4>Nom </h4><p><?php echo $data[0]['firstname'];?></p>
                            <h4>Prénom </h4><p><?php echo $data[0]['lastname'];?></p>
                            <h4>Date de naissance : </h4><p><?php echo $data[0]['birthdate'];?></p>
                            <h4>Téléphone : </h4><p><?php echo $data[0]['phone'];?></p>
                            <h4>E-mail : </h4><p><?php echo $data[0]['mail'];?></p>
                            <a class="btn btn-warning" href="./modifier-patient.php?id=<?= $_REQUEST['id'] ?>">Modifier</a>
                            <a class="btn btn-danger" href="./liste-patient.php">Retour</a>
                        </div>
                    </div>
                    <h1 class="text-center bg-info">Vos Rendez-Vous</h1>
                    <?php foreach( $data as $data2 ){ ?>
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4>RDV le : </h4><p><?= $data2['dateHour'];?></p>
                        </div>
                    </div>
                    <?php
                    }}}?>
            </div>
        </div>  
</body>
</html>