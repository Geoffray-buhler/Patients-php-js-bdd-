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

    $stmt = $bdd -> prepare("DELETE FROM patients WHERE id=?");
    $res = $stmt-> execute(array($_REQUEST['id']));

header('Location:./liste-patients.php');
exit();
?>