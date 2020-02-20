<?php ob_start(); ?>
<div class="d-flex flex-column justify-content-center align-items-center">
<h1 class="text-center w-50">Bienvenue a l'hopital velpo</h1>
  <img class="image-accueil " src="./public/assets/HVElpo.png">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner border rounded">
    <div class="carousel-item active">
      <img class="d-block image-carousel" src="https://i.ytimg.com/vi/RFLxu5_m3r8/hqdefault.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block image-carousel" src="https://i.ytimg.com/vi/_dLzh-DFu4s/maxresdefault.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block image-carousel" src="https://i.ytimg.com/vi/ruiiFQ0p4WM/hqdefault.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php 
$content = ob_get_clean(); 
require __DIR__.'/template-base.php';
?>