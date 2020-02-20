<?php ob_start(); ?>
<div class="container">
    <div class="row d-flex flex-column">
        <div class="col-12 d-flex flex-column">
            <h3 class="text-center">Liste des patients</h3> 
            <h4 class="text-center">Recherche<h4>
            <my-autocomplete class="form-control" query-url="controller/api/search.php" query-field="q" ></my-autocomplete>
            <h4 class="text-center">Liste<h4>
        </div>
        <div id="liste-complete">

<?php
foreach($patients as $data)
{
?>
        <div class="card mb-3">
            <div class="card-body text-center">
                <h4>Nom </h4><p><?php echo $data['firstname'];?></p>
                <h4>Prénom </h4><p><?php echo $data['lastname'];?></p>
                <a type="submit" class="btn btn-info" href="./index.php?action=profil_patient&id=<?= $data['id'] ?>">Informations</a>
                <a type="submit" class="btn btn-danger" href="./controller/api/Delete-patients.php?id=<?= $data['id'] ?>">Effacer</a>
            </div>
        </div>  
<?php }?> 
        </div>
    </div>
</div>  
<script type="text/javascript" src="public/js/MyAutocompletion.js"></script>
<script type="text/javascript">
const $autoComp = document.querySelector('my-autocomplete');
$autoComp.addEventListener('select', (evt) => {
    const patient = evt.detail.patient;
    window.location = `./profil-patient.php?id=${patient.id}`;
})
$autoComp._Format = function(item){
    return item.firstname + ' ' + item.lastname;
}
</script>

<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>