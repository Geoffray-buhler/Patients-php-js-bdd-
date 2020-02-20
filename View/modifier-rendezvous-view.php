<?php ob_start(); ?>
<div class="container">
    <div class="row d-flex flex-column">
        <div class="col-12 d-flex flex-column">
            <h3 class="text-center">Modification du rendez-vous</h3> 
        </div>

<?php

if(isset($_REQUEST['id']))
{
    {
    ?>
            <form action="./controller/update-RDV.php?id=<?=$_REQUEST["id"]?>" method="POST">
                <h2><?= $data['lastname']?> <?= $data['firstname']?></h2>
                <input type="date" class="form-control m-3" name="dates" value=<?= $data['dateHour']?>>
                <input type="time" class="form-control m-3" name="timess" value=<?= $data['timess']?>>
                <button class="btn btn-warning" type="submit">Modifier</button>
                <a class="btn btn-danger" href="./liste-rendezvous.php">Retour</a>
            </form>
    <?php }

}?>
    
    </div>
</div>  

<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>