<?php ob_start(); ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Informations RDV</h3> 
                </div>
 
        <?php
        if(isset($_GET['id']))
        {
            {
            ?>
            <div class="card">
                <div class="card-body text-center">
                    Prénom : <p><?= $data['firstname'] ?></p> Nom :<p><?= $data['lastname'] ?></p> Le <p><?= $data['dateHour']  ?> à <?= $data['timess']  ?> </p>Numero contact :<p><?= $data['phone'] ?></p>
                    <a class="btn btn-warning" href="./controller/app/modifier-RDV.php?id=<?= $_REQUEST["id"] ?>">Modifier</a>
                </div>
            </div>
            <img src="http://www.toplol.com/images/toplol/toplol_791.jpg"/>
            <?php }

        }?>
            
            </div>
        </div>  

<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>