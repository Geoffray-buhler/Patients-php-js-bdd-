<?php ob_start(); ?>
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h3 class="text-center">Liste des RDV</h3> 
            </div>

    <?php

    foreach($RDV as $data)
    {
    ?>
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h4>Nom </h4><p><?= $data['firstname'];?></p>
                    <h4>Prénom </h4><p><?= $data['lastname'];?></p>
                    <h4>RDV</h4><p><?= $data['dateHour'];?></p>
                    <a class="btn btn-info" href="./rendezvous.php?id=<?= $data['idapp'] ?>">Informations</a>
                    <a class="btn btn-danger" href="./controller/Delete-rendezvous.php?id=<?= $data['idapp'] ?>">Effacer</a>
                </div>
            </div> 
    <?php }?> 
        </div>
    </div>  
<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>