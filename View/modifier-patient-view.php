<?php ob_start(); ?>
<div class="container">
            <div class="row d-flex flex-column">
                <div class="col-12 d-flex flex-column">
                    <h3 class="text-center">Modification fiche patients</h3> 
                </div>
 
        <?php

        if(isset($_REQUEST['id']))
        {
            $data = getPatient();
            {
            ?>
                   <form action="update-patient.php?id=<?=$_REQUEST["id"]?>" method="POST">
                        <input type="text" class="form-control m-3" name="firstname" value=<?= $data['firstname']?>>
                        <input type="text" class="form-control m-3" name="lastname" value=<?= $data['lastname']?>>
                        <input type="date" class="form-control m-3" name="birthdate" value=<?= $data['birthdate']?>>
                        <input type="text" class="form-control m-3" name="phone" value=<?= $data['phone']?>>
                        <input type="mail" class="form-control m-3" name="mail" value=<?= $data['mail']?>>
                        <button class="btn btn-warning" type="submit">Modifier</button>
                        <a class="btn btn-danger" href="./liste-patient.php">Retour</a>
                    </form>
            <?php }

        }?>
            
            </div>
        </div>  
<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>