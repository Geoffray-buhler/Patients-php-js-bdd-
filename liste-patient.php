<?php
// Code du controlleur (modèle MVC)

// Utilisation du modèle pour accès aux données
require_once(__DIR__.'/model.php');
$patients = getAllPatients();

// Inclusion de la vue
include __DIR__.'/liste-patient-view.php';