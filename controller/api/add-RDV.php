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

if(isset($_POST['dateRDV']) and isset($_POST['HeureRDV']))
{
    $stmt = $bdd -> prepare("INSERT INTO appointments(dateHour,idPatients) VALUES (?,?)");
    $res = $stmt-> execute(array($_POST['dateRDV'].' '.$_POST['HeureRDV'].':00',$_POST['id']));
};

header('Location:../liste-patient.php');
exit();
?>