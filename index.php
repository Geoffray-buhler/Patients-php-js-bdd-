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
  <a class="nav-link" href="./liste-patient.php">Liste des patients<span class="sr-only">(current)</span></a>
  <a class="nav-link" href="./liste-rendezvous.php">Liste des Rendez-vous !<span class="sr-only">(current)</span></a>
  <a class="nav-link" href="./ajout-rendezvous.php">Prendre un Rendez-vous !<span class="sr-only">(current)</span></a>
  <a class="nav-link" href="./ajout-patient.php">Ajout des patients<span class="sr-only">(current)</span></a>
</nav>
<div class="d-flex flex-column justify-content-center align-items-center">
<h1 class="text-center w-50">Bienvenue a l'hopital velpo</h1>
  <img class="image-accueil " src="./assets/HVElpo.png">
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
</body>
</html>