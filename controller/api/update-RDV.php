<?php
try 
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=hospitale2n;charset=utf8','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die('Erreur: ' . $e->getMessage());
}

if(isset($_POST['dates']) and isset($_POST['timess']))
{
    $stmt = $bdd -> prepare("UPDATE appointments SET dateHour=? WHERE id=?");
    $res = $stmt-> execute(array($_REQUEST['dates'].' '.$_REQUEST['timess'],$_REQUEST['id']));
};

header('Location:./liste-rendezvous.php');
exit();
?>