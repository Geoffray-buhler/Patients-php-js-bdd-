<?php

require('./controller/app/controller.php');

if(isset($_GET['action'])) {
  switch($_GET['action']){
    case 'index':
      index();
    break;
    case 'liste_patient':
      liste_patient();
    break;
    case 'add_patient':
      add_patient();
    break;
    case 'add_rendezvous':
      add_rendezvous();
    break;
    case 'liste_rendezvous':
      liste_rendezvous();
    break;
    case 'modif_rendezvous':
      modif_rendezvous();
    break;
    case 'profil_patient':
      profil_patient($_GET['id']);
    break;
    case 'modifier_patient':
      modifier_patient($GET['id']);
    break;
    case 'rendezvous':
      rendezvous();
    break;
  }
}else{
  index();
}