<?php ob_start(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <form action="./controller/api/add-patients.php" method="POST">
                    <div class="form-group d-flex justify-content-center flex-column">
                    <h3 class="text-center">Fiche patient</h3> 
                    <input type="text" class="form-control m-3" name="lastname" placeholder="Nom Du Patient">
                    <input type="text" class="form-control m-3" name="firstname" placeholder="Prénom Du Patient">
                    <input type="date" class="form-control m-3" name="birthdate" placeholder="Date de naissance">
                    <input type="text" class="form-control m-3" name="phone" placeholder="Numero de téléphone">
                    <input type="mail" class="form-control m-3" name="mail" placeholder="E-mail">
                    <button type="submit" class="btn btn-primary ml-5">Enregistrer</button>
                    <div>
                </form>
            </div>
        </div>
    </div>    
<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>