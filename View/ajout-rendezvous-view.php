<?php ob_start(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <form action="./control/add-RDV.php" method="POST">
                    <div class="form-group d-flex justify-content-center flex-column">
                    <h3 class="text-center">Prise de RDV</h3> 
                    <input type="date" class="form-control m-3" name="dateRDV" placeholder="Date du RDV">
                    <input type="time" min="07:00" max="19:30" required class="form-control m-3" name="HeureRDV" placeholder="Heure du RDV">
                    <input class="form-control d-none m-3 hidden" name="id"/>
                    <my-autocomplete class="form-control m-3" limit-value=0 query-url="controller/api/search.php" query-field="q"></my-autocomplete>
                    <button type="submit" class="btn btn-primary ml-5">Enregistrer</button>
                    <div>
                </form>
            </div>
        </div>
    </div> 
    <script type="text/javascript" src="public/js/MyAutocompletion.js"></script> 
    <script type="text/javascript">
     const $autoComp = document.querySelector('my-autocomplete');
        $autoComp.addEventListener('select', (evt) => {
            const patient = evt.detail.patient;
            $inputHidden = document.querySelector('.hidden');
            $inputHidden.value = patient.id;
            console.log(patient);
        })
        $autoComp._Format = function(item){
            return item.firstname + ' ' + item.lastname;
        }
</script>
<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>