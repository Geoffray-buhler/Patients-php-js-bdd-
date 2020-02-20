<?php 

require('./model/model.php');

function index()
{
    include './View/firstpage-view.php';
};

function liste_patient()
{
    $patients = getOffsetPatients();
    include './View/liste-patient-view.php';
};

function add_patient()
{
    include './View/ajout-patient-view.php';
};

function add_rendezvous()
{
    include './View/ajout-rendezvous-view.php';
};

function liste_rendezvous()
{
    $RDV = getRendezVousList();
    include './View/liste-RDV-view.php';
};

function modif_rendezvous()
{
    $data = getARendezVous($_GET['id']);
    include './View/modifier-rendezvous-view.php';
};

function profil_patient(){
    $data = getPatient($_GET['id']);
    include './View/profil-patient-view.php';
};

function rendezvous()
{
    $data = getARendezVous($_GET['id']);
    include './View/rendezvous-view.php';
};

function modifier_patient()
{
    $data = getPatient($_GET['id']);
    include './View/modifier-patient-view.php';
}