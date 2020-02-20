<?php ob_start(); ?>
        <div class="container">
            <div class="row d-flex flex-column">
                <div class="col-12 d-flex flex-column">
                    <h3 class="text-center">Informations patients</h3> 
                </div>
 
        <?php
        if(isset($_REQUEST['id']))
        {

            {
            ?>
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4>Nom </h4><p><?php echo $data[0]['firstname'];?></p>
                            <h4>Prénom </h4><p><?php echo $data[0]['lastname'];?></p>
                            <h4>Date de naissance : </h4><p><?php echo $data[0]['birthdate'];?></p>
                            <h4>Téléphone : </h4><p><?php echo $data[0]['phone'];?></p>
                            <h4>E-mail : </h4><p><?php echo $data[0]['mail'];?></p>
                            <a class="btn btn-warning" href="./index.php?action=modifier_patient&id=<?= $_REQUEST['id'] ?>">Modifier</a>
                            <a class="btn btn-danger" href="./index.php?action=liste_patient">Retour</a>
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
<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>