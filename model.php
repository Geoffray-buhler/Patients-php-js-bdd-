<?php
function getBDD(){
    try{
        $bdd = new PDO('mysql:host=localhost:3306;dbname=hospitale2n;charset=utf8','root','');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }catch(Exception $e){
        die('Erreur: ' . $e->getMessage());
    }
};

function queryAll($sqlQuery = "", $params = array()) {
    $bdd = getBDD();
    $stmt = $bdd->prepare($sqlQuery);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    $stmt->closeCursor();
    return $data;
};

function getAllPatients() {
    $data = queryAll("SELECT id,lastname,firstname FROM patients");
    return $data;
};