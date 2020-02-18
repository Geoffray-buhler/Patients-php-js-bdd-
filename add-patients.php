<?php
try 
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=hospitale2n;charset=utf8','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exeption $e)
{
    die('Erreur: ' . $e->getMessage());
}

if(isset($_POST['lastname']) and isset($_POST['firstname'])and isset($_POST['birthdate'])and isset($_POST['phone'])and isset($_POST['mail']) and !empty($_POST['lastname']) and !empty($_POST['firstname']) and !empty($_POST['birthdate']) and !empty($_POST['phone']) and !empty($_POST['mail']))
{
    $stmt = $bdd -> prepare("INSERT INTO patients (lastname,firstname,birthdate,phone,mail) VALUES (?,?,?,?,?)");
    $res = $stmt-> execute(array($_POST["lastname"],$_POST["firstname"],$_POST["birthdate"],$_POST["phone"],$_POST["mail"]));
}

header('Location:./index.php');
exit();
?>